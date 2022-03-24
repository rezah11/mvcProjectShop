<?php

class model_comment extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertComment($uId, $pId, $comment, $parentId)
    {
        $status = 'noAction';
        $sql = 'INSERT INTO `comment`(`description`,`status`,`parentId`,`userId`,`productId`,`created_at`) VALUES (?,?,?,?,?,NOW())';
        $query = $this->doQuery($sql, [$comment, $status, $parentId, $uId, $pId]);
    }

    public function getComment()
    {
        $sql = 'SELECT * FROM ((`comment` INNER JOIN `users` on `comment`.`userId`=`users`.`id`)INNER JOIN `product` on `comment`.`productId`=`product`.`id`)';
        $query=$this->doSelect($sql,[]);
        return $query;
    }

}