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
}
public function deleteSlider($id,$image){
    $path="view/Admin/slider/image/".$image;
    var_dump($path);
    $this->modelDb->deleteSlider($id);
    Model::backUrl('slider/showSliderAdmin');
}
}