<?php

class Model_user extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUser($id)
    {
//        print_r($id);
        $sql = 'SELECT * FROM `users` WHERE `id`=?';
        $query = $this->doSelect($sql, [$id], true);
        return $query;
    }

    public function updateUser($id, $name, $email, $tel, $pass, $rePass)
    {
        if ($this->checkPassword($pass, $rePass) != false && $this->checkMail($email) != false) {
            $hashpass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = 'UPDATE `users` SET `name`=?,`email`=?,`tel`=?,`password`=?  WHERE `id`=?';
            $this->doQuery($sql, [$name, $email, $tel, $hashpass, $id]);
        }

    }

    public function checkMail($email)
    {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $sql = "SELECT * FROM `users` WHERE `email`=?";
            $query = $this->doSelect($sql, [$email], true);
            if (empty($query)) {
                $result = false;
            } else {
                $result = $query;
            }
        }
        return $result;
    }

    public function checkPassword($pass, $rePass)
    {
        $result;
        if ($pass != $rePass) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    public function getProPaid($id)
    {
        $state = 'paid';
        $sql = 'SELECT * FROM `cart` INNER JOIN `product` on `cart`.`productId`=`product`.`id` WHERE `cart`.`userId`=? AND `cart`.`state`=?';
        $query = $this->doSelect($sql, [$id, $state]);
        return $query;
    }

    public function getProNpaid($id)
    {
        $state = 'notPaid';
        $sql = 'SELECT * FROM `cart` INNER JOIN `product` on `cart`.`productId`=`product`.`id` WHERE `cart`.`userId`=? AND `cart`.`state`=?';
        $query = $this->doSelect($sql, [$id, $state]);
        return $query;
    }
}