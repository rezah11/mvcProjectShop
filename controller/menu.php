<?php

class menu extends controller
{
    public function __construct()
    {
    }
    public function index(){
        $this->view('Admin/menu/index');

    }
    public function insertMenu(){
        $title=$_POST['title'];
        $link=$_POST['link'];
        $parentId=$_POST['parentId'];
        $type=$_POST['type'];
        if($type=='add'){
            try {
                $query=$this->modelDb->insertMenu($title,$link,$parentId);
                echo 1;
            }catch (Exception $e){
                echo 0;
            }

        }
    }
    public function load(){
        $this->view('Admin/menu/Ajax/ajaxSubMenu');
    }
}