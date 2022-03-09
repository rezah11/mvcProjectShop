<?php

class Model_product extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getCategory($id){
        $sql='SELECT * FROM `category` WHERE `id` =?';
        $query=$this->doSelect($sql,[$id],true);
        return $query;
    }
    public function insertProduct($title,$summary,$price,$discription,$imageBigNew,$image1New,$image2New,$image3New,$image4New,$categoryId){
        $sql='INSERT INTO `product` (`title`,`summary`,`price`,`discription`,`imageBig`,`image1`,`image2`,`image3`,`image4`,`categoryId`) VALUES (?,?,?,?,?,?,?,?,?,?)';
        $query=$this->doQuery($sql,[$title,$summary,$price,$discription,$imageBigNew,$image1New,$image2New,$image3New,$image4New,$categoryId]);
    }
    public function getProduct($id){
        $sql='SELECT * FROM category INNER JOIN product ON category.id=product.categoryId WHERE product.categoryId=?';
        $query=$this->doSelect($sql,[$id]);
        return $query;
    }
    public function deleteProduct($id,$imageBig,$image1,$image2,$image3,$image4){
        $sql='DELETE FROM `product` WHERE `id`=?';
        $query=$this->doQuery($sql,[$id]);
        unlink($imageBig);
        unlink($image1);
        unlink($image2);
        unlink($image3);
        unlink($image4);
    }
}