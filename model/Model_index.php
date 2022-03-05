<?php

class Model_index extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function test(){
        echo 'this is test';
    }
    public function getUser(){
        $sql='SELECT * FROM `users`';
        $query=$this->doSelect($sql,[]);
        return $query;
    }
    public function getUserId($id){
        $sql='SELECT * FROM `users` WHERE id=?';
        $query=$this->doSelect($sql,[$id],true);
        return $query;
    }
    public function insertUser($name,$meli,$tel){
    $sql='INSERT INTO `users`(`name`,`meli`,`tel`) VALUES (?,?,?)';
    $this->doQuery($sql,[$name,$meli,$tel]);
    }
    public function deleteUser($id){
        $sql='DELETE * FROM `users` WHERE `id`=?';
        $this->doQuery($sql,[$id]);
    }
    public function updateUser($id,$name,$meli,$tel){
        $sql='UPDATE `users` SET `name`=?,`meli`=?,`tel`=? WHERE `id`=?';
        $this->doQuery($sql,[$name,$meli,$tel]);
    }
    public function getMeta(){
        $sql='SELECT * FROM `meta` ORDER BY `id` DESC limit 1 offset 0';
        $query=$this->doSelect($sql,[],true);
        return $query;
    }
}