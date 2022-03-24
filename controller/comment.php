<?php

class comment extends controller
{
    public $id;
//    public $username;

    public function __construct()
    {
//        Model::initSession();
//        if (empty(Model::getSession('userLogined'))) {
//            Model::backUrl('index/index');
//        }
        $this->id = Model::getSession('userId');
//        $this->username = Model::getSession('userName');
    }
    public function index(){
        $query=$this->modelDb->getComment();
        $data=['comments'=>$query];
        $this->view('Admin/comment/index',$data);
    }
    public function sendComment(){
        if(isset($_POST['sendCommnet'])){
            $uId=$_POST['uId'];
            $pId=$_POST['pId'];
            $comment=$_POST['comment'];
            $parentId=$_POST['parentId'];
            $this->modelDb->insertComment($uId,$pId,$comment,$parentId);
        }
    }

}