<?php

class category extends controller
{
    public function __construct()
    {

    }
    public function index($id=0,$edit=''){
        $categoryUpdate=$this->modelDb->getCategory($id);
        $data=['id'=>$id,'edit'=>$edit,'categoryUpdate'=>$categoryUpdate];
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
    public function updateCategory(){
//        var_dump($_POST);
        $id=$_POST['categoryUpdateId'];
        $title=$_POST['title'];
        $image=$_FILES['image'];
        $imageUp=Model::uplodeImage($image,'view/Admin/category/image/');
//        echo $imageUp;
        $this->modelDb->updateCategory($id,$title,$imageUp);
        Model::backUrl('category/showCategoryAdmin');
//        echo $id.'<br/>'.$title.'<br/>'.$image.'<br/>';
    }
}