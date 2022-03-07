<?php

class Json extends controller
{
public function __construct()
{
}
public function meta(){

}
public function sliderJson(){
    $query=$this->modelDb->sliderJson();
    print_r($query);
}
}