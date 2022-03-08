<?php

class Model_category extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertCategory($title,$imageNew){
        $sql='INSERT INTO `category` (`title`,`image`) VALUES (?,?)';
        $query=$this->doQuery($sql,[$title,$imageNew]);
    }
    public function showCategoryAdmin(){
        $sql="SELECT * FROM `category`";
        $query=$this->doSelect($sql,[]);
        return $query;
    }
    public function deleteCategory($id){
        $sql="DELETE FROM `category` WHERE `id`=?";
        $this->doQuery($sql,[$id]);
    }
}