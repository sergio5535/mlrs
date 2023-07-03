<?php

namespace App\Models;

use CodeIgniter\Model;

class ExpertHeroesModel extends Model
{
    protected $table = 'expert_heroes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['marksman', 'assassin', 'fighter', 'tank', 'support', 'mage'];

    // function getAll()
    // {
    //     // return $this->findAll();
    //     $builder = $this->db->table($this->table);
    //     $builder->select('*');
    //     $builder->join('heroes', 'heroes.id = expert_heroes.hero_id', 'inner');
    //     $builder->join('pakar', 'pakar.id = expert_heroes.expert_id', 'inner');
    //     $query = $builder->get();

    //     return $query->getResult();
    // }

    public function getFilteredHeroes(
        $attackType,
        $complexity,
        $lane,
        $expertName
    ) {

        $builder = $this->db->table($this->table);

        $query = $builder
            ->select("heroes.names as hero_name, heroes.images as hero_image, expert_heroes.expert_id as expert_id ,expert_heroes.marksman, expert_heroes.assassin, expert_heroes.fighter, expert_heroes.tank, expert_heroes.support, expert_heroes.mage")
            ->join('heroes', 'heroes.id = expert_heroes.hero_id', 'inner')
            ->where('expert_heroes.attack_type', $attackType)
            ->where('expert_heroes.complexity', $complexity)
            ->where('expert_heroes.lane', $lane)
            ->where('expert_heroes.expert_id', $expertName)
            ->get();

        $results = $query->getResult();

        $arrayResults = [];
        foreach ($results as $result) {
            $arrayResults[] = (array) $result;
        }


        return $arrayResults;
    }


    public function getById($id)
    {
        $builder = $this->db->table($this->table);

        $query = $builder
            ->select("heroes.names as hero_name, heroes.images as hero_image, expert_heroes.expert_id as expert_id ,expert_heroes.marksman, expert_heroes.assassin, expert_heroes.fighter, expert_heroes.tank, expert_heroes.support, expert_heroes.mage, expert_heroes.id as id")
            ->join('heroes', 'heroes.id = expert_heroes.hero_id', 'inner')
            ->where('expert_heroes.expert_id', $id)
            ->get();

        $results = $query->getResult();

        $arrayResults = [];
        foreach ($results as $result) {
            $arrayResults[] = (array) $result;
        }

        return $arrayResults;
    }


    function updateHero($id, $field, $value)
    {
        $this->where('id', $id)
            ->set($field, $value)
            ->update();
    }
}
