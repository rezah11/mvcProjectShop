<?php

class category extends controller
{
    public function __construct()
    {

    }
    public function index(){
        $data=[];
        $this->view('Admin/category/index',$data);
    }
    public function insertCategory(){
        $title=$_POST['title'];
        $image=$_FILES['image'];
        $imageNew=Model::uplodeImage($image,'view/Admin/category/image/');
        $this->modelDb->insertCategory($title,$imageNew);
        Model::backUrl('category/index');
    }
    public function showCategoryAdmin(){
        $query=$this->modelDb->showCategoryAdmin();
        $data=['category'=>$query];
        $this->view('Admin/category/show',$data);
    }
    public function deleteCategory(){
        $id=$_POST['id'];
        $path=$_POST['imagePath'];
        $query=$this->modelDb->deleteCategory($id);
        unlink($path);
        Model::backUrl('category/showCategoryAdmin');
    }
}