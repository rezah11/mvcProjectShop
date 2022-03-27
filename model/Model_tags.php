<?php

class Model_tags extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertTag($name)
    {
        $sql = 'INSERT INTO `tags`(`name`) VALUES (?)';
        $query = $this->doQuery($sql, [$name]);
    }

    public function getTags()
    {
        $sql='SELECT * FROM `tags`';
        return $this->doSelect($sql,[]);
    }
    public function deleteTag($id){
        $sql='DELETE FROM `tags` WHERE `id`=?';
        $this->doQuery($sql,[$id]);
    }
    public function getTag($id){
        $sql='SELECT * FROM `tags` WHERE `id`=?';
        return $this->doSelect($sql,[$id],true);
    }
    public function updateTag($id,$name){
        $sql='UPDATE `tags` SET `name`=? WHERE `id`=?';
        $this->doQuery($sql,[$name,$id]);
    }
}