<?php

class slider extends controller
{
public function __construct()
{
}
public function index($id=0,$edit=''){
    $query=$this->modelDb->getSliderId($id);
    $data=['id'=>$id,'edit'=>$edit,'slider'=>$query];
    $this->view('Admin/slider/index',$data);
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
//var_dump($_POST[]);
$id=$_POST['sliderUpdateId'];
$caption=$_POST['caption'];
$link=$_POST['link'];
$image=$_FILES['image'];
$imageUp=MODEL::uplodeImage($image,'view/Admin/slider/image/');
//echo $id.$caption.$link.$imageUp    ;
//var_dump($_POST);
//var_dump($_FILES);
    $this->modelDb->updateSlider($caption,$link,$imageUp,$id);
    Model::backUrl('slider/showSliderAdmin');
}
}