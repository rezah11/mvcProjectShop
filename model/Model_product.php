<?php

class Model_product extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getCategory(){
        $sql='SELECT * FROM `category`';
        $query=$this->doSelect($sql,[]);
        return $query;
    }
    public function insertProduct($title,$summary,$price,$discription,$imageBigNew,$image1New,$image2New,$image3New,$image4New,$categoryId){
        $sql='INSERT INTO `product` (`title`,`summary`,`price`,`discription`,`imageBig`,`image1`,`image2`,`image3`,`image4`,`categoryId`) VALUES (?,?,?,?,?,?,?,?,?,?)';
        $query=$this->doQuery($sql,[$title,$summary,$price,$discription,$imageBigNew,$image1New,$image2New,$image3New,$image4New,$categoryId]);
    }
}