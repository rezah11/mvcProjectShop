<?php

class Model_menu extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertMenu($title,$link,$parentId){
        $sql='INSERT INTO `menu` (`title`,`link`,`parentId`) VALUES (?,?,?)';
        $this->doQuery($sql,[$title,$link,$parentId]);
    }

}