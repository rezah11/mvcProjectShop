<?php

class Model_cart extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function checkRows($uId,$pId){
        $result=false;
        $sql='SELECT * FROM `cart` WHERE `userId`=? AND `productId`=?';
        $query=$this->doSelect($sql,[$uId,$pId],true);
        if(!empty($query)){
            $result=false;
            $count=$query['count'];
        }else{
            $result = true;
        }
        return [$result,$count];
    }
    public function insertCart($userId, $productId)
    {
        $result=$this->checkRows($userId,$productId);
        if($result[0]==true){
            $count=1;
            $sql='INSERT INTO `cart`(`userId`,`productId`,`count`) VALUES (?,?,?)';
            $this->doQuery($sql,[$userId,$productId,$count]);
        }
        else{
            $count=$result[1]+1;
            $this->updateCount($userId,$productId,$count);
        }
    }
    public function getCart($id){
        $sql='SELECT * FROM ((`cart` INNER JOIN `users` on `cart`.`userId`=`users`.`id`)INNER JOIN `product` on `cart`.`productId`=`product`.`id`) WHERE `users`.`id`=?';
        $query=$this->doSelect($sql,[$id]);
        return $query;
    }
    public function updateCount($userId,$productId,$count){

        $sql='UPDATE `cart` SET `count`=? WHERE `userId`=? AND `productId`=?';
        $query=$this->doQuery($sql,[$count,$userId,$productId]);
    }
}