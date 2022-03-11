<?php

class menu extends controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Admin/menu/index');

    }

    public function insertMenu()
    {

        ///id menu for delete
        ///
        if (isset($_POST['type'])){
            $type = $_POST['type'];
            if ($type == 'add') {
                try {
                    $title = $_POST['title'];
                    $link = $_POST['link'];
                    $parentId = $_POST['parentId'];///id menu for add
                    $type = $_POST['type'];
                    $query = $this->modelDb->insertMenu($title, $link, $parentId);
                    echo 1;
                }catch (Exception $e){
                    echo 2;
                }

            }elseif ( $type == 'delete') {
                try {
                    $menuId = $_POST['menuId'];
                    $query = $this->modelDb->delMenu($menuId);
                    echo 1;
                }catch (Exception $e){
                    echo 2;
                }

            }
        }
        else{
            echo 0;
        }

    }
    public function load()
    {
        $this->view('Admin/menu/Ajax/ajaxShowMenu');
    }
}