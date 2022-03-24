<?php

class comment extends controller
{
    public $id;

//    public $username;

    public function __construct()
    {
//        Model::initSession();
//        if (empty(Model::getSession('userLogined'))) {
//            Model::backUrl('index/index');
//        }
        $this->id = Model::getSession('userId');
//        $this->username = Model::getSession('userName');
    }

    public function index()
    {
//        $query=$this->modelDb->getComment();
//        $data=['comments'=>$query];
//        print_r($data['comments'][0][0]);
        $this->view('Admin/comment/index');
    }

    public function sendComment()
    {
        if (isset($_POST['sendCommnet'])) {
            $uId = $_POST['uId'];
            $pId = $_POST['pId'];
            $comment = $_POST['comment'];
            $parentId = $_POST['parentId'];
            $this->modelDb->insertComment($uId, $pId, $comment, $parentId);
        }
    }

    public function confirmComment($id)
    {
        if (isset($_POST['oparation'])) {
            if ($_POST['oparation'] == 'confirm') {
                try {
                    $this->modelDb->confirmComment($id);
                    echo 1;
                } catch (Exception $e) {
                    echo 0;
                }
            } else if ($_POST['oparation'] == 'reject') {
                try {
                    $this->modelDb->rejectComment($id);
                    echo 1;
                } catch (Exception $e) {
                    echo 0;
                }
            }}
        else{
                Model::backUrl('index/index');

            }

        }

}