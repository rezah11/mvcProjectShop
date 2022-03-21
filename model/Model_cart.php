<?php

class Model_cart extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function checkRows($uId, $pId)
    {
        $result = false;
        $state='notPaid';
        $sql = 'SELECT * FROM `cart` WHERE `userId`=? AND `productId`=? AND `state`=?';
        $query = $this->doSelect($sql, [$uId, $pId,$state], true);
        var_dump($query);
        if (!empty($query)){
            $result = false;
            $count = $query['count'];
        }else{
            $result = true;
        }
        return [$result, $count];
    }

    public function insertCart($userId, $productId)
    {
        $result = $this->checkRows($userId, $productId);
        if ($result[0] == true) {
            $state = 'notPaid';
            $count = 1;
            $sql = 'INSERT INTO `cart`(`userId`,`productId`,`count`,`state`,`created_at`,`updated_at`) VALUES (?,?,?,?,now(),now())';
            $this->doQuery($sql, [$userId, $productId, $count, $state]);
        } else {
            $count = $result[1] + 1;
            $this->updateCount($userId, $productId, $count);
        }
    }

    public function getCart($id)
    {
        $state='notPaid';
        $sql = 'SELECT * FROM ((`cart` INNER JOIN `users` on `cart`.`userId`=`users`.`id`)INNER JOIN `product` on `cart`.`productId`=`product`.`id`) WHERE `cart`.`userId`=? AND `cart`.`state`=?';
        $query = $this->doSelect($sql, [$id,$state]);
        return $query;
    }

    public function updateCount($userId, $productId, $count)
    {
        $sql = 'UPDATE `cart` SET `count`=?,`updated_at`=now() WHERE `userId`=? AND `productId`=?';
        $query = $this->doQuery($sql, [$count, $userId, $productId]);
    }

    public function delCart($cartId)
    {
        $sql = 'DELETE FROM `cart` WHERE `id`=?';
        $query = $this->doQuery($sql, [$cartId]);
    }

    public function updateCart($id, $count)
    {
        $sql = 'UPDATE `cart` SET `count`=?,`updated_at`=now() WHERE `id`=?';
        $query = $this->doQuery($sql, [$count, $id]);
    }

    public function updateState($id){
        $state='paid';
        $sql = 'UPDATE `cart` SET `state`=?,`updated_at`=now() WHERE `userId`=?';
        $query = $this->doQuery($sql, [$state, $id]);
    }
}