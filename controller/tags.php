<?php

class tags extends controller
{
    public function __construct()
    {
    }

    public function index($id=0,$edit='')
    {
        $updateTag=$this->modelDb->getTag($id);
        $data=['edit'=>$edit,'id'=>$id,'updateTag'=>$updateTag];
        $this->view('Admin/tags/index',$data);
    }

    public function insertTag()
    {
        $name=$_POST['name'];
        $this->modelDb->insertTag($name);
        Model::backUrl('tags/index');
    }
    public function showTags()
    {
        $query=$this->modelDb->getTags();
        $data=['tags'=>$query];
        $this->view('Admin/tags/show',$data);
    }
    public function deleteTag(){
        $id=$_POST['id'];
        $this->modelDb->deleteTag($id);
        Model::backUrl('tags/showTags');
    }
    public function updateTag(){
        $id=$_POST['tagUpdateId'];
        $name=$_POST['name'];
        $this->modelDb->updateTag($id,$name);
        Model::backUrl('tags/showTags');
    }
}