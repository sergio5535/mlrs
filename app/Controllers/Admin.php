<?php

namespace App\Controllers;

use App\Models\ExpertHeroesModel;
use CodeIgniter\Exceptions\AlertError;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin_view');
    }

    public function expert1()
    {
        $model = new ExpertHeroesModel();

        $selectedExpert = $this->request->getPost('expert_id');
        // var_dump($selectedExpert);

        // $data['expertHeroes'] = $model->where('expert_id', $selectedExpert)->findAll();
        $data['expertHeroes'] = $model->getById($selectedExpert);

        $expertName = $model->where('expert_id', $selectedExpert)->first();

        if ($expertName) {
            $data['namaExpert'] = $expertName['expert_id'];
        } else {
            $data['namaExpert'] = "Error";
        }

        return view('expert1', $data);
    }

    public function expert1Update()
    {
        $model = new ExpertHeroesModel();

        $selectedExpert = $this->request->getPost('expert_id');
        // var_dump($selectedExpert);

        // $data['expertHeroes'] = $model->where('expert_id', $selectedExpert)->findAll();

        $data['expertHeroes'] = $model->getById($selectedExpert);

        $expertName = $model->where('expert_id', $selectedExpert)->first();

        if ($expertName) {
            $data['namaExpert'] = $expertName['expert_id'];
        } else {
            $data['namaExpert'] = "Error";
        }

        return view('expert1_update', $data);
    }

    public function update_hero()
    {
        $request = service('request');
        $id = $request->getPost('id');
        $field = $request->getPost('field');
        $value = $request->getPost('value');

        // Update the data in the database
        $model = new ExpertHeroesModel();
        $model->updateHero($id, $field, $value);

        // Return success response
        return $this->response->setJSON(['status' => 'success']);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
