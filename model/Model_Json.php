<?php

class Model_Json extends Model
{
public function __construct()
{
    parent::__construct();
}
public function sliderJson(){
    $sql='SELECT * FROM `slider`';
    $query=$this->doSelect($sql,[]);
    return  json_encode($query);
}
}