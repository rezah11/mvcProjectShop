<?php

class Model_Admin extends Model
{
public function __construct()
{
    parent::__construct();
}
public function insertSetAdmin($title,$author,$discription,$keyword){
    $sql='INSERT INTO `meta`(`title`, `author`, `discription`, `keywords`) VALUES (?,?,?,?)';
    $this->doQuery($sql,[$title,$author,$discription,$keyword]);
}
public function showSetAdmin(){
    $sql='SELECT * FROM `meta`';
    $data=$this->doSelect($sql,[]);
    return $data;
}
public function deleteSetAdmin($id){
    $sql='DELETE FROM `meta` WHERE `id`=?';
    $this->doQuery($sql,[$id]);
}
}