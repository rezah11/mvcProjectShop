<?php

class slider extends controller
{
public function __construct()
{
}
public function index(){
    $this->view('Admin/slider/index');
}
public function insertSlider(){
    $caption=$_POST['caption'];
    $link=$_POST['link'];
    $image=$_FILES['image'];
    $uplodImage=Model::uplodeImage($image,'view/Admin/slider/image/');
    $this->modelDb->insertSlider($caption,$link,$uplodImage);
    Model::backUrl('slider/index');
}
public function showSliderAdmin(){
    $query=$this->modelDb->selectSliderAdmin();
    $data=['slider'=>$query];
    $this->view('Admin/slider/show',$data);
//    $this->view('Admin/slider/show',$data);
}
public function deleteSlider(){
    $id=$_POST['id'];
    $path=$_POST['imagePath'];
    unlink($path);
    $this->modelDb->deleteSlider($id);
    Model::backUrl('slider/showSliderAdmin');
}
public function updateSlider(){
    $id=$_POST['updateSliderId'];
//    echo 'update'.$id   ;
//    var_dump($_POST);
    $query=$this->modelDb->getSliderId($id);
//    var_dump($query);
    $data=['slider'=>$query,'id'=>$id];
//    var_dump($data);
    $this->view('Admin/slider/index',$data);

}
}