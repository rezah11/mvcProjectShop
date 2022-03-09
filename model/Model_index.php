<?php

class Model_index extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getMeta(){
        $sql='SELECT * FROM `meta` ORDER BY `id` DESC limit 1 offset 0';
        $query=$this->doSelect($sql,[],true);
        return $query;
    }
    public function getSlider(){
        $sql='SELECT * FROM `slider`';
        $query=$this->doSelect($sql,[]);
        return $query;
    }
    public function getCategory(){
        $sql='SELECT * FROM `category`';
        $query=$this->doSelect($sql,[]);
        return $query;
    }
}