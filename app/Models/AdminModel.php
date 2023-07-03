<?php

namespace App\Models;

use CodeIgniter\Model;

class ExpertHeroesModel extends Model
{
    protected $table = 'expert_heroes';

    function getAll()
    {
        return $this->findAll();
    }
}
