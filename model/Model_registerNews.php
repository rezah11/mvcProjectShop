<?php

class Model_registerNews extends Model
{
public function __construct()
{
    parent::__construct();
}
public function getEmail($email){
$sql='SELECT * FROM `register_news` WHERE `email`=?';
$query=$this->doSelect($sql,[$email],true);
return $query;
}
public function insertEmail($email){
    $sql="INSERT INTO `register_news` (`email`) VALUES (?)";
    $query=$this->doQuery($sql,[$email]);
}
}