<?php

class product extends controller
{
    public function __construct()
    {
    }
    public function index(){
        $query=$this->modelDb->getCategory();
        $data=['category'=>$query];
        $this->view('Admin/product/index',$data);
    }
    public function insertProduct(){
        $title=$_POST['title'];
        $summary=$_POST['summary'];
        $price=$_POST['price'];
        $discription=$_POST['discription'];
        $imageBig=$_FILES['imageBig'];
        $image1=$_FILES['image1'];
        $image2=$_FILES['image2'];
        $image3=$_FILES['image3'];
        $image4=$_FILES['image4'];
        $imageBigNew=Model::uplodeImage($imageBig,'view/Admin/product/imageBig/');
        $image1New=Model::uplodeImage($image1,'view/Admin/product/fancy/');
        $image2New=Model::uplodeImage($image2,'view/Admin/product/fancy/');
        $image3New=Model::uplodeImage($image3,'view/Admin/product/fancy/');
        $image4New=Model::uplodeImage($image4,'view/Admin/product/fancy/');
        $categoryId=$_POST['categoryId'];
//        var_dump($_POST);
        $this->modelDb->insertProduct($title,$summary,$price,$discription,$imageBigNew,$image1New,$image2New,$image3New,$image4New,$categoryId);
        Model::backUrl('product/index');
    }

}