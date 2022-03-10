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
    public function getProducts($id,$count){
        $count=5;
        $page=3;
        $rowStart=($count * $page)-$page;
        $sql='SELECT * FROM category inner join product on category.id=product.categoryId where product.categoryId=?  limit '.$page.' offset '.$rowStart;
        $query=$this->doSelect($sql,[$id]);
        return $query;
    }
    public function showProduct($id){
        $sql='SELECT * FROM `product` WHERE `id`=?';
        $query=$this->doSelect($sql,[$id],true);
        return $query;
    }
}