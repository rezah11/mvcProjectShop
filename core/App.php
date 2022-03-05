<?php

class App
{
public $controller="index";
public $method="index";
public $param=[];
public function __construct()
{
 if (isset($_GET['url'])){
     $url=$_GET['url'];
     $url=$this->Explode($url);
     $this->controller=$url[0];
     unset($url[0]);
     if(isset($url[1])){
         $this->method=$url[1];
         unset($url[1]);
     }
     $this->param=array_values($url);
 }
 $path="controller/".$this->controller.'.php';
 if(file_exists($path)){
     require $path;
     $object=new $this->controller;
     $object->Model($this->controller);
     if(method_exists($object,$this->method)){
         call_user_func_array([$object,$this->method],$this->param);
     }else{
//         echo '404 errorr'.'</br>'.'not found page';
         require 'controller/Page404.php';
         $object=new Page404;
         $object->index();
     }
 }else{
     require 'controller/Page404.php';
     $object=new Page404;
         $object->index();
 }
}
public function Explode($url){
    $url=rtrim($url,'/');
    $url=explode('/',$url);
    return $url;
}
}