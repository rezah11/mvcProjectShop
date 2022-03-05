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
    $data=['meta'=>$query];
//    var_dump($data);
    $this->Header('index/header',$data);
    $this->view('index/view');
    $this->footer('index/footer');

//    $query=$this->modelDb->getUserId(2);
//    var_dump($query);

}
}