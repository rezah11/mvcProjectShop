<?php

class Model_search extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function showResultSearch($string)
    {
        $sql = 'SELECT * FROM `tagproduct` INNER JOIN `tags` on `tagproduct`.`tagId`=`tags`.`id` INNER JOIN `product` on `tagproduct`.`productId`=`product`.`id` INNER JOIN `category` on `product`.`categoryId`=`category`.`id` WHERE `tags`.`name`=?';
        return $this->doSelect($sql, [$string]);
    }
}