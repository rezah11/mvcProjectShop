<?php

class index extends controller
{
public function __construct()
{

}
public function index(){
//    $x=10;
//    $data=['x'=>$x];
    $query=$this->modelDb->getMeta();
    $querySlider=$this->modelDb->getSlider();
    $querycategory=$this->modelDb->getCategory();
    $data=['meta'=>$query,'slider'=>$querySlider,'category'=>$querycategory];
//    var_dump($data['slider']);
    $this->Header('index/header',$data);
    $this->view('index/view',$data);
    $this->footer('index/footer');

//    $query=$this->modelDb->getUserId(2);
//    var_dump($query);

}
}