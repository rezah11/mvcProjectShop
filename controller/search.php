<?php

class search extends controller
{
    public function __construct()
    {
    }
    public function index(){
//        var_dump($_POST['textSearch']);
        if (isset($_POST['textSearch'])){
            $query=$this->modelDb->showResultSearch($_POST['textSearch']);
            $data=['result'=>$query];
//            var_dump($data['result']);
            $this->view('index/search',$data);
        }else{
            Model::backUrl('index/index');
        }

    }
}