<?php

class Model_login extends Model
{
public function __construct()
{
    parent::__construct();

}
public function getAdmin(){
    $sql='SELECT * FROM `login`';
    $query=$this->doSelect($sql,[],true);
//    print_r($query);

    return $query;
}
public function insertAdmin($username,$password){
    $sql='INSERT INTO `login`(`username`, `password`) VALUES (?,?)';
    $query=$this->doQuery($sql,[$username,$password]);
    return $query;
}
}