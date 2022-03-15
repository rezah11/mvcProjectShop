<?php

class cart extends controller
{
public function __construct()
{
}
public function index(){
    $this->view('index/Cart');
}
}