<?php

class Model_user extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUser($id){
//        print_r($id);
        $sql='SELECT * FROM `users` WHERE `id`=?';
        $query=$this->doSelect($sql,[$id],true);
        return $query;
    }
}