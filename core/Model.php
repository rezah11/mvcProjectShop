<?php

class Model
{
    protected static $sql='';
    public function __construct()
    {
        $username='root';
        $server='localhost';
        $password='';
        $dbName='shop';
        self::$sql=new PDO('mysql:host='.$server.';dbname='.$dbName,$username,$password);
        self::$sql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        self::$sql->exec('set names utf8');
    }
    public function doQuery($sql,$values=[]){
        $query=self::$sql->prepare($sql);
        foreach ($values as $key=>$item){
            $query->bindValue($key+1,$item);
        }
        $query->execute();
    }
    public function doSelect($sql,$values,$fetch=false){
        $query=self::$sql->prepare($sql);
        foreach ($values as $key=>$item){
            $query->bindValue($key+1,$item);
        }
        $query->execute();
//        if($fetch==false){
//            return $query->fetchAll();
//        }
//        elseif ($fetch=='test') {
//            return $query->rowCount();
//        }
//        else if ($fetch==true){
//            return $query->fetch();
//        }
        if($fetch==true){
            return $query->fetch();
        }
        elseif ($fetch=='rowCount') {
            return $query->rowCount();
        }
        else{
            return $query->fetchAll();
        }

    }
    public static function backUrl($path){
        header('location:'.URL.$path);
    }
    public static function uplodeImage($image,$path){
        $uplode=true;
        $image_new=$image['name'];
        $exist=$path.$image_new;
        if(file_exists($exist)){
            $image_new=time().$image_new;
        }
        $targetFiles=$path.$image_new;
        $fileType=pathinfo($targetFiles,PATHINFO_EXTENSION);
        if($fileType!='jpg'&&$fileType!='png'){
            $uplode=false;
        }
        if($image['size']>5000000){
            $uplode=false;
        }
        if($uplode==true){
            move_uploaded_file($image['tmp_name'],$targetFiles);
        }
        return $image_new;
    }
    public static function initSession(){
        @session_start();
    }
    public static function setSession($name,$value){
        $_SESSION[$name]=$value;
    }
    public static function getSession($name){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }

    }
    public static function unsetSession($name){
        unset($_SESSION[$name]);
    }
    public function rowCountProduct($categoryId){
        $query=self::$sql->prepare('SELECT * FROM `product` where `categoryId`=?');
        $query->bindValue(1,$categoryId);
        $query->execute();
        $result=$query->rowCount();
        return $result;
    }
    public function getMenu($level=0){
        $sql='SELECT * FROM `menu` WHERE `parentId`=?';
        $query=$this->doSelect($sql,[$level]);
        foreach ($query as $value){
            $children=$this->getMenu($value['id']);
            if( $children!=null && sizeof($children)>0){
                $value['children']=$children;
//                print_r(@$children) ;
            }
//            print_r(@$value['children']);
            @$data[]=$value;
        }
        return @$data;
    }
}