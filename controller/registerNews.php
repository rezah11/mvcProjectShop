<?php

class registerNews extends controller
{
    public function __construct()
    {
    }

    public function insertEmail()
    {
        var_dump($_POST);
        try {
            $email = $_POST['email'];
            $query = $this->modelDb->getEmail($email);
            if (empty($query)) {
                $this->modelDb->insertEmail($email);
                echo 1;
//                return 1;
            } else {
                echo 2;
//                return 2;
            }
        } catch (Exception $e) {
            echo 0;
        }
    }
}