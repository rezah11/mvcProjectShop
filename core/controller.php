<?php

class controller
{
    public $modelDb='';
    public function __construct()
    {
    }
    public  function Header($urlHeader,$data=[]){
    require 'view/'.$urlHeader.'.php';
    }
    public  function view($urlView,$data=[]){
        require 'view/'.$urlView.'.php';
    }
    public  function footer($urlFooter,$data=[]){
        require 'view/'.$urlFooter.'.php';
    }
    public function Model($urlModel){
        require 'model/Model_'.$urlModel.'.php';
        $className="Model_".$urlModel;
        $this->modelDb=new $className;
    }
}