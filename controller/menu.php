<?php

class menu extends controller
{
    public function __construct()
    {
    }
    public function index(){
        $this->view('Admin/menu/index');
    }
}