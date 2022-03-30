<?php

class Model_product extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCategory($id)
    {
        $sql = 'SELECT * FROM `category` WHERE `id` =?';
        $query = $this->doSelect($sql, [$id], true);
        return $query;
    }

    public function insertProduct($title, $summary, $price, $discription, $imageBigNew, $image1New, $image2New, $image3New, $image4New, $categoryId)
    {
        $sql = 'INSERT INTO `product` (`title`,`summary`,`price`,`discription`,`imageBig`,`image1`,`image2`,`image3`,`image4`,`categoryId`) VALUES (?,?,?,?,?,?,?,?,?,?)';
        $query = $this->doQuery($sql, [$title, $summary, $price, $discription, $imageBigNew, $image1New, $image2New, $image3New, $image4New, $categoryId]);
    }

    public function getProduct($id)
    {
        $sql = 'SELECT * FROM category INNER JOIN product ON category.id=product.categoryId WHERE product.categoryId=?';
        $query = $this->doSelect($sql, [$id]);
        return $query;
    }

    public function deleteProduct($id, $imageBig, $image1, $image2, $image3, $image4)
    {
        $sql = 'DELETE FROM `product` WHERE `id`=?';
        $query = $this->doQuery($sql, [$id]);
        unlink($imageBig);
        unlink($image1);
        unlink($image2);
        unlink($image3);
        unlink($image4);
    }

    public function getProductUp($id)
    {
        $sql = 'SELECT * FROM `product` WHERE `id`=?';
        $query = $this->doSelect($sql, [$id], true);
        return $query;
    }

    public function getAllCategories()
    {
        $sql = 'SELECT * FROM `category`';
        $query = $this->doSelect($sql, []);
        return $query;
    }

    public function updateProduct($id, $title, $summary, $price, $discription, $imageBigNew, $image1New, $image2New, $image3New, $image4New, $categoryId)
    {
        $product = $this->getProductUp($id);
        if ($imageBigNew == time()) {
            $imageBigNew = $product['imageBig'];
        }
        if ($image1New == time()) {
            $image1New = $product['image1'];
        }
        if ($image2New == time()) {
            $image2New = $product['image2'];
        }
        if ($image3New == time()) {
            $image3New = $product['image3'];
        }
        if ($image4New == time()) {
            $image4New = $product['image4'];
        }
        $sql = 'UPDATE `product` SET `title`=?,`summary`=?,`price`=?,`discription`=?,`imageBig`=?,`image1`=?,`image2`=?,`image3`=?,`image4`=?,`categoryId`=? WHERE `id`=?';
        $this->doQuery($sql, [$title, $summary, $price, $discription, $imageBigNew, $image1New, $image2New, $image3New, $image4New, $categoryId, $id]);
    }

    public function getTags()
    {
        $sql = 'SELECT * FROM `tags`';
        return $this->doSelect($sql, []);
    }
    public function cheakRepeat($pId,$tId){
        $sql='SELECT * FROM `tagproduct` WHERE `tagId`=? AND `productId`=?';
        $query=$this->doSelect($sql,[$tId,$pId],'rowCount');
        if($query>0){
            return false;
        }else{
            return true;
        }
    }
    public function insertTagPost($pId, $tId)
    {
        if($this->cheakRepeat($pId,$tId)){
        $sql='INSERT INTO `tagproduct`(`tagId`,`productId`) VALUES (?,?)';
        $query=$this->doQuery($sql,[$tId,$pId]);
        }
    }
    public function getTagsProduct($id){
        $sql='SELECT * FROM ((`tagproduct` INNER JOIN `tags` on `tagproduct`.`tagId`=`tags`.Id) INNER join `product` on `tagproduct`.`productId`=`product`.`id`) WHERE `product`.`categoryId`=?';
        return $this->doSelect($sql,[$id]);
    }
    public function deleteTag($pId,$tId)
    {
        $sql='DELETE FROM `tagproduct` WHERE `tagId`=? AND `productId`=?';
        $this->doQuery($sql,[$tId,$pId]);
    }
}