<?php

namespace App\Controllers;

use App\Models\HeroesModel;

class Heroes extends BaseController
{
    public function heroes()
    {
        $model = new HeroesModel();
        $data['heroes'] = $model->getAll();

        $data['count'] = $model->countAllResults();

        return view('heroes', $data);
    }

    public function heroesDetail()
    {
        $request = service('request');
        $heroId = $request->getGet('id');

        $model = new HeroesModel();
        $hero = $model->find($heroId);

        // Pass the hero details to the detail view
        return view('heroes_detail', ['hero' => $hero]);
    }
}
