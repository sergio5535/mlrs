<?php

namespace App\Controllers;

use App\Models\ExpertHeroesModel;
use App\Models\HeroesModel;

use function PHPSTORM_META\map;

class Home extends BaseController
{
    private $attributes = [
        "marksman", "assassin", "fighter", "tank", "support", "mage"
    ];

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function recommend()
    {
        return view('recommend');
    }

    public function recommendAttribute()
    {
        $data['attack_type'] = $this->request->getGet('attack_type');
        $data['complexity'] = $this->request->getGet('complexity');
        $data['lane'] = $this->request->getGet('lane');
        // $data['expert_name'] = $this->request->getGet('expert_name');
        return view('recommend_attribute', $data);
    }

    public function recommendResult()
    {
        $attackType = $this->request->getGet('attack_type') ?? 'melee';
        $complexity = $this->request->getGet('complexity') ?? 'easy';
        $lane = $this->request->getGet('lane') ?? 'mid';
        // $expertName = $this->request->getGet('expert_name') ?? 'udin';

        $inputMatriks = [];
        foreach ([
            "marksman_assassin",
            "marksman_fighter",
            "marksman_tank",
            "marksman_support",
            "marksman_mage",
            "assassin_fighter",
            "assassin_tank",
            "assassin_support",
            "assassin_mage",
            "fighter_tank",
            "fighter_support",
            "fighter_mage",
            "tank_support",
            "tank_mage",
            "support_mage",
        ] as $inputMatrik) {
            $value = $this->request->getGet($inputMatrik);

            $inputMatriks[$inputMatrik] = $this->parseComparisonValue($value);
        }

        $matriks = [
            [
                1,
                $inputMatriks['marksman_assassin'],
                $inputMatriks['marksman_fighter'],
                $inputMatriks['marksman_tank'],
                $inputMatriks['marksman_support'],
                $inputMatriks['marksman_mage']
            ],
            [
                1 / $inputMatriks['marksman_assassin'],
                1,
                $inputMatriks['assassin_fighter'],
                $inputMatriks['assassin_tank'],
                $inputMatriks['assassin_support'],
                $inputMatriks['assassin_mage']
            ],
            [
                1 / $inputMatriks['marksman_fighter'],
                1 / $inputMatriks['assassin_fighter'],
                1,
                $inputMatriks['fighter_tank'],
                $inputMatriks['fighter_support'],
                $inputMatriks['fighter_mage']
            ],
            [
                1 / $inputMatriks['marksman_tank'],
                1 / $inputMatriks['assassin_tank'],
                1 / $inputMatriks['fighter_tank'],
                1,
                $inputMatriks['tank_support'],
                $inputMatriks['tank_mage']
            ],
            [
                1 / $inputMatriks['marksman_support'],
                1 / $inputMatriks['assassin_support'],
                1 / $inputMatriks['fighter_support'],
                1 / $inputMatriks['tank_support'],
                1,
                $inputMatriks['support_mage']
            ],
            [
                1 / $inputMatriks['marksman_mage'],
                1 / $inputMatriks['assassin_mage'],
                1 / $inputMatriks['fighter_mage'],
                1 / $inputMatriks['tank_mage'],
                1 / $inputMatriks['support_mage'],
                1
            ],
        ];


        // hitung total setiap column (sum column matrix)
        $sumColumns = [];
        for ($i = 0; $i < count($matriks); $i++) {
            $sumColumns[] = array_sum(array_column($matriks, $i));
        }


        // hitung matriks normalisasi (normalized matrix)
        $normalisasi = [];
        foreach ($matriks as $i => $row) {
            foreach ($row as $j => $val) {
                $total = $sumColumns[$j];
                $normalisasi[$i][$j] = $val / $total;
            }
        }

        // hitung bobot rata-rata (average weight) w
        $averages = [];
        foreach ($normalisasi as $i => $row) {
            $averages[$i] = array_sum($row) / count($row);
        }


        // hitung konsistensi lambda max
        // perkalian matrix dengan average weight
        $multiplied = [];
        foreach ($matriks as $i => $row) {
            $multiplied[$i] = $this->multiplyMatrixEveryRow($row, $averages);
        }

        // menghitung nilai t
        $t = 0;
        foreach ($multiplied as $i => $m) {
            $t += $m / $averages[$i];
        }
        $t = $t / count($this->attributes);

        // menghitung ci
        $ci = ($t - count($this->attributes)) /
            (count($this->attributes) - 1);

        // random r
        $ri = [0, 0, 0.58, 0.9, 1.12, 1.24, 1.32, 1.41, 1.45, 1.49];

        // menghitung cr
        $cr = $ci / $ri[count($this->attributes)];
        if ($cr > 0.1) {
            // dd("Konsistensi matriks perbandingan berpasangan tidak terpenuhi.");
            // Set the alert message
            $alertMessage = 'Bobot Yang Dimasukkan Tidak Valid, Silahkan Melakukan Rekomendasi Ulang';

            // Set the flash data
            $session = session();
            $session->setFlashdata('alert', $alertMessage);

            // Redirect to the view
            return redirect()->to('recommend');
        }

        // ambil semua nama pakar
        $model = new ExpertHeroesModel();
        $expertNames = $model->select('distinct(expert_id) as expert_id')
            ->findAll();


        $heroNames = [];
        $normalisasiExpert = [];
        foreach ($expertNames as $expertName) {
            // ambil data bobot hero dari db
            $heroes = $this->getFilteredHeroes(
                $attackType,
                $complexity,
                $lane,
                $expertName['expert_id']
            );

            // hasil rekomendasi
            $recommendationExpert = [];
            foreach ($heroes as $hero) {
                $sum = 0;

                foreach ($this->attributes as $i => $attribute) {
                    $sum += $hero[$attribute] * $averages[$i];
                }

                $recommendationExpert[$hero['hero_name']] = [
                    'hero' => $hero['hero_name'],
                    'value' => $sum,
                    'hero_image' => $hero['hero_image']
                ];

                $heroNames = array_unique(
                    array_merge(
                        $heroNames,
                        [$hero['hero_name']]
                    )
                );
            }

            $normalisasiExpert[$expertName['expert_id']] = $recommendationExpert;

            // dd($recommendationExpert);
        }

        // dd($normalisasiExpert);

        // menghitung total average agregate dari semua pakar
        $agregateValues = [];
        foreach ($heroNames as $heroName) {
            $sum = 1;

            $tempHeroImage = '';
            foreach ($expertNames as $index => $expertName) {
                $tempNorm = $normalisasiExpert[$expertName['expert_id']][$heroName] ?? [];

                $sum *= $tempNorm['value'] ?? 1;

                if (empty($tempHeroImage)) {
                    $tempHeroImage = $tempNorm['hero_image'] ?? '';
                }
            }


            $agregateValues[] = [
                'hero' => $heroName,
                // 'value' => $sum / count($expertNames),
                'value' => pow($sum, 1 / 3),
                'hero_image' => $tempHeroImage
            ];
        }

        // dd($agregateValues);


        // sorting hasil rekomendasi dari semua pakar
        usort($agregateValues, function ($a, $b) {
            if ($a['value'] > $b['value']) {
                return -1;
            } elseif ($a['value'] < $b['value']) {
                return 1;
            }
            return 0;
        });

        if ($agregateValues == []) {
            // Set the alert message
            $alertMessage = 'Input Yang Dimasukkan Tidak Valid, Silahkan Melakukan Rekomendasi Ulang';

            // Set the flash data
            $session = session();
            $session->setFlashdata('alert', $alertMessage);

            // Redirect to the view
            return redirect()->to('recommend');
        }

        return view('recommend_result', ['agregateValues' => $agregateValues]);
    }

    // filter hero
    private function getFilteredHeroes(
        $attackType,
        $complexity,
        $lane,
        $expertName
    ) {
        $model = new ExpertHeroesModel();
        return $model->getFilteredHeroes(
            $attackType,
            $complexity,
            $lane,
            $expertName
        );
    }

    private function parseComparisonValue($value)
    {
        switch ($value) {
            case -4:
                return 5;
            case -3:
                return 4;
            case -2:
                return 3;
            case -1:
                return 2;
            case 1:
                return 0.5;
            case 2:
                return 0.33;
            case 3:
                return 0.25;
            case 4:
                return 0.2;
            default:
                return 1;
        }
    }

    private function multiplyMatrixEveryRow($row, $valueMultiply)
    {
        $total = 0;
        foreach ($row as $index => $cell) {
            $total += $cell * $valueMultiply[$index];
        }
        return $total;
    }
}
