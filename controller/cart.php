<?php

class cart extends controller
{
    public $username;
    public $id;

    public function __construct()
    {
        Model::initSession();
        if (empty(Model::getSession('userLogined'))) {
            Model::backUrl('index/index');
        }
        $this->id = Model::getSession('userId');
        $this->username = Model::getSession('userName');
    }

    public function index()
    {
        $carts = $this->modelDb->getCart($this->id);
//        var_dump($this->id);
//        var_dump($carts);
        $data = ['userName' => $this->username, 'carts' => $carts];
        $this->view('index/Cart', $data);
    }

    public function insertCart()
    {
//        var_dump($_POST);
//        echo $_POST['productId'];
        if (isset($_POST['productId'])) {
            try {
                $productId = $_POST['productId'];
                $userId = $this->id;
                $this->modelDb->insertCart($userId, $productId);
                echo 1;
            } catch (Exception $e) {
                echo 0;
            }
        } else {
            Model::backUrl('index/index');
            echo 0;
        }
    }

    public function delCart()
    {
        if (isset($_POST['id'])) {
            try {
                $cartId = $_POST['id'];
                $this->modelDb->delCart($cartId);
                echo 1;
            } catch (Exception $e) {
                echo 0;
            }

        } else {
//            Model::backUrl('cart/index');
            echo 0;

        }
    }

    public function updateCart()
    {
        if (isset($_POST['rowId']) && isset($_POST['count'])) {
            try {
                $id = $_POST['rowId'];
                $count = $_POST['count'];
                if ($count > 0) {
                    $this->modelDb->updateCart($id, $count);
                    echo 1;
                } else {
                    echo -1;
                }

            } catch (Exception $e) {
                echo 0;
            }
        } else {
            Model::backUrl('cart/index');
            echo 0;
        }
    }

    public function pay()
    {
        $this->modelDb->updateState($this->id);
        Model::backUrl('index/index');
    }
}