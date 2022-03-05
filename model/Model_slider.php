<?php

class Model_slider extends Model
{
public function __construct()
{
    parent::__construct();
}
public function insertSlider($caption,$link,$image){
    $sql='INSERT INTO `slider` (`caption`,`link`,`image`) VALUES (?,?,?)';
    $query=$this->doQuery($sql,[$caption,$link,$image]);
}
public function selectSliderAdmin(){
    $sql='SELECT * FROM `slider` ORDER BY `id` DESC';
    $query=$this->doSelect($sql,[]);
    return $query;
}
public function deleteSlider($id){
    $sql='DELETE FROM `slider` WHERE `id`=?';
    $query=$this->doQuery($sql,[$id]);
}
public function getSliderId($id){
    $sql='SELECT * FROM `slider` WHERE `id`=?';
    $query=$this->doSelect($sql,[$id],true);
//    $data=['slider'=>$query];
    return $query;
//    header();
}
}