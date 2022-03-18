<?php

class user extends controller
{
    public $id;
    public function __construct()
    {
        Model::initSession();
        if(empty(Model::getSession('userLogined'))){
            Model::backUrl('loginUsers/index');
        }
        $this->id=Model::getSession('userId');
    }
    public function index(){
        $query=$this->modelDb->getUser($this->id);
        $data=['user'=>$query];
        $this->view('index/Users/userPanel',$data);
    }
    public function update(){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $tel=$_POST['tel'];
        $pass=$_POST['pass'];
        $rePass=$_POST['rePass'];
        $query=$this->modelDb->updateUser($this->id,$name,$email,$tel,$pass,$rePass);
        Model::backUrl('user/index');
    }

}