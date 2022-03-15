<?php

class product extends controller
{
    public function __construct()
    {
    }
    public function index($id,$updateId,$edit=''){
        $query=$this->modelDb->getCategory($id);
        $updateRec=$this->modelDb->getProductUp($updateId);
        $categories=$this->modelDb->getAllCategories();
        $data=['category'=>$query,'product'=>$updateRec,'id'=>$id,'edit'=>$edit,'categories'=>$categories];
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
        Model::backUrl('product/index/'.$categoryId);
    }
    public function getProduct($id){
        $query=$this->modelDb->getProduct($id);
        $data=['product'=>$query];
        $this->view('Admin/product/show',$data);
    }
    public function deleteProduct(){
        $id=$_POST['id'];
        $imageBig=$_POST['imagePathB'];
        $image1=$_POST['imagePath1'];
        $image2=$_POST['imagePath2'];
        $image3=$_POST['imagePath3'];
        $image4=$_POST['imagePath4'];
        $catId=$_POST['catid'];
        $query=$this->modelDb->deleteProduct($id,$imageBig,$image1,$image2,$image3,$image4);
        Model::backUrl('product/getProduct/'.$id);
    }
    public function updateProduct(){
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
        $id=$_POST['id'];
        $this->modelDb->updateProduct($id,$title,$summary,$price,$discription,$imageBigNew,$image1New,$image2New,$image3New,$image4New,$categoryId);
        Model::backUrl('product/getProduct/'.$categoryId);
    }
}