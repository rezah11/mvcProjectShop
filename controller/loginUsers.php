<?php

class loginUsers extends controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('index/Users/index');
    }
    public function signUp(){
        if (isset($_POST['signUpSubmit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $tel=$_POST['tel'];
            $pass=$_POST['password'];
            $rePass=$_POST['repass'];
            $this->modelDb->signUp($name,$email,$tel,$pass,$rePass);
            Model::backUrl('loginUsers/index');
        }else{
            Model::backUrl('loginUsers/index');
        }
    }
    public function login(){
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $query=$this->modelDb->login($email,$pass);
        if(empty($query)){
            echo 'ورود ناموفق بود'ک
        }else{
            var_dump($query);
        }

    }
}