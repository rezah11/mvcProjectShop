<?php

class Admin extends controller
{
    public function __construct()
    {
        Model::initSession();
        if (Model::getSession('successAdmin') == false) {
            Model::backUrl('login/index');
        }
    }

    public function index()
    {
        $this->view('Admin/admin/index');
    }

    public function insertSetAdmin()
    {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $discription = $_POST['discription'];
        $keywords = $_POST['keywords'];
        $this->modelDb->insertSetAdmin($title, $author, $discription, $keywords);
        Model::backUrl('Admin/index');
    }

    public function showSetAdmin()
    {
        $query = $this->modelDb->showSetAdmin();
        $data = ['meta' => $query];
        $this->view('Admin/admin/show', $data);
    }

    public function deleteSetAdmin($id)
    {
        $this->modelDb->deleteSetAdmin($id);
        Model::backUrl('Admin/showSetAdmin');
    }
}