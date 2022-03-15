<?php

class Model_loginUsers extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function signUp($name, $email, $tel, $pass, $rePass)
    {
        if ($this->checkEmail($email) && $this->checkName($name) && $this->checkPass($pass, $rePass)) {
            $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = 'INSERT INTO `users`(`name`,`email`,`tel`,`password`) VALUES (?,?,?,?)';
            $this->doQuery($sql, [$name, $email, $tel, $hashedpass]);
        } else {
            echo 'متاسفانه عملیات ناموفق بود';
        }
    }

    public function checkEmail($email)
    {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $sql = "SELECT * FROM `users` WHERE `email`=?";
            $query = $this->doSelect($sql, [$email], true);
            if (empty($query)) {
                $result = true;
            } else {
                $result = false;
            }
        }
        return $result;
    }

    public function checkPass($pass, $rePass)
    {
        $result;
        if ($pass != $rePass) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    public function checkName($name)
    {
        $result;
        if (!preg_match("/^[A-Za-z][A-Za-z0-9]*$/", $name)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function checkEmailLogin($email)
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
    public function login($email, $pass)
    {
        $userLogin=$this->checkEmailLogin($email);
        if($userLogin!=false){
            $hashPass=password_verify($pass,$userLogin['password']);

        }
    }
}