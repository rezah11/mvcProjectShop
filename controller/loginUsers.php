<?php

class loginUsers extends controller
{
    public function __construct()
    {
        Model::initSession();
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
    public function logOut(){
        Model::unsetSession('userLogined');
        Model::unsetSession('userWrong');
        Model::backUrl('index/index');
    }
    public function login(){
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $query=$this->modelDb->login($email,$pass);
        if($query[0]==true){
//            echo $query[1];
            Model::setSession('userLogined',$query[1]);
            $user=$this->modelDb->getUser($email);
            Model::backUrl('index/index/'.$user['id'].'/'.$user['name']);
        }else{
            Model::setSession('userWrong',$query[1]);
            Model::backUrl('loginUsers/index');
        }
    }
}