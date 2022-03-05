<?php

class Page404 extends controller
{
 public function __construct()
 {
     parent::__construct();
 }
 public function index(){
     $this->Header('index/header');
     $this->view('404/Page404');
     $this->footer('index/footer');
 }
}