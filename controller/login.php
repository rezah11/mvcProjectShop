<?php

class login extends controller
{

public function __construct()
{
    Model::initSession();
}
public function index(){
    $this->header('Admin/login/header');
    $this->view('Admin/login/view');
    $this->footer('Admin/login/footer');
    $admin=$this->modelDb->getAdmin();
//    print_r($admin);
    $username="rezaH";
    $password="189020";
    if (empty($admin)){
        $hashpasss=password_hash($password,PASSWORD_DEFAULT);
        $admin=$this->modelDb->insertAdmin($username,$hashpasss);
    }
}
public function checkAdmin(){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $admin=$this->modelDb->getAdmin();
    if($username==$admin['username'] && password_verify($password,$admin['password'])){
        Model::setSession('successAdmin','اطلاعات ادمین صحیح است');
        Model::backUrl('Admin/index');
    }else{
        Model::setSession('wrong','نام کاربری یا رمز عبور اشتباه است');
        Model::backUrl('login/index');
    }
}
public function logout(){
    Model::unsetSession('successAdmin');
    Model::unsetSession('wrong');
    Model::backUrl('login/index');
}
}