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
        if($fetch==false){
            return $query->fetchAll();
        }else{
            return $query->fetch();
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
        session_start();
    }
    public static function setSession($name,$value){
        $_SESSION[$name]=$value;
    }
    public static function getSession($name){
        return $_SESSION[$name];
    }

}