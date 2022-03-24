<?php

class Model_index extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getMeta(){
        $sql='SELECT * FROM `meta` ORDER BY `id` DESC limit 1 offset 0';
        $query=$this->doSelect($sql,[],true);
        return $query;
    }
    public function getSlider(){
        $sql='SELECT * FROM `slider`';
        $query=$this->doSelect($sql,[]);
        return $query;
    }
    public function getCategory(){
        $sql='SELECT * FROM `category`';
        $query=$this->doSelect($sql,[]);
        return $query;
    }
    public function getProducts($id,$page){
        $perPage=3;// this will be dynamic in admin page
        $rowStart=($page * $perPage)-$perPage;
        $sql='SELECT * FROM category inner join product on category.id=product.categoryId where product.categoryId=?  limit '.$perPage.' offset '.$rowStart;
        $query=$this->doSelect($sql,[$id]);
        return [$query,$perPage];
    }
    public function showProduct($id){
        $sql='SELECT * FROM `product` WHERE `id`=?';
        $query=$this->doSelect($sql,[$id],true);
        return $query;
    }
    public function countProducts($id,$count){
        $perPage=$this->getProducts($id,$count)[1];
        $rows=$this->rowCountProduct($id);
        $totalPage=ceil($rows/$perPage);
        return $totalPage;
    }
    public function commentsProduct($id,$level=0){
        $status='confirm';
        $sql='SELECT * FROM ((`comment` INNER JOIN `users` on `comment`.`userId`=`users`.`id`)INNER JOIN `product` on `comment`.`productId`=`product`.`id`) where `comment`.`productId`=? AND `comment`.`status`=? AND `comment`.`parentId`=?';
        $query=$this->doSelect($sql,[$id,$status,$level]);
        foreach ($query as $value){
            $children=$this->commentsProduct($value['id'],$value[0]);
            if($children!=null && sizeof($children)>0){
                $value['children']=$children;
            }
            @$data[]=$value;
        }
//        $query1=$this->doSelect($sql,[$id,$status,$level]);
        return @$data;
    }
}