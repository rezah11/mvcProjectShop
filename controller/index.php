<?php

class index extends controller
{
    public $id;
    public $username;
    public function __construct()
    {
        Model::initSession();
        parent::__construct();
//        if (!empty(Model::getSession('userLogined'))) {
//            Model::backUrl('index/index');
            $this->id = Model::getSession('userId');
            $this->username = Model::getSession('userName');
//        }
    }

    public function index($id=0,$name='')
    {
//    $x=10;
//    $data=['x'=>$x];
//        var_dump($this->username);
        $sliderCount=$this->modelDb->sliderCount();
//        print_r($sliderCount) ;
        $hashtag1=$this->modelDb->getHashtag();
        $hashtag2=$this->modelDb->getHashtag('موبایل');
        var_dump($hashtag1);
        $query = $this->modelDb->getMeta();
        $querySlider = $this->modelDb->getSlider();
        $querycategory = $this->modelDb->getCategory();
        $data = ['meta' => $query, 'slider' => $querySlider, 'category' => $querycategory,'id'=>$id,'name'=>$name,'sliderCount'=>$sliderCount,'hashtag1'=>$hashtag1,'hashtag2'=>$hashtag2];
//    var_dump($data['slider']);
        $this->Header('index/header', $data);
        $this->view('index/view', $data);
        $this->footer('index/footer');

//    $query=$this->modelDb->getUserId(2);
//    var_dump($query);

    }

    public function products($id, $title,$page=1)
    {
        $products = $this->modelDb->getProducts($id,$page)[0];
        $totalPages=$this->modelDb->countProducts($id,$page);
//        var_dump($totalPages);
        $data = ['pageOn'=>$page,'catId'=>$id,'products' => $products, 'catTitle' => $title,'totalPages'=>$totalPages];
        $this->view('index/category', $data);
    }
    public function showProduct($id,$catTitle){
        $query=$this->modelDb->showProduct($id);
//        var_dump($this->username);
        $comments=$this->modelDb->commentsProduct($id,$level=0);
        $tags=$this->modelDb->tagsProduct($id);

//        var_dump($comments);
        $data=['product'=>$query,'catTitle'=>$catTitle,'productId'=>$id,'username'=>$this->username,'id'=>$this->id,'comments'=>$comments,'tags'=>$tags];
        $this->view('index/product',$data);
    }
}