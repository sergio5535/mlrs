<?php

namespace App\Models;

use CodeIgniter\Model;

class HeroesModel extends Model
{
    protected $table = 'heroes';
    protected $primaryKey = 'id';

    function getAll()
    {
        return $this->findAll();
    }
}
