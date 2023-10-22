<?php 

class Search {
    private $id;
    private $name;
    private $url;


    public function  getId(){
        return $this->id;
    }

    public function  setId($id){
        $this->id = $id;
    }

    public function  getName(){
        return $this->name;
    }

    public function  setName($name){
        $this->name = $name;
    }

    public function  getUrl(){
        return $this->url;
    }

    public function  setUrl($url){
        $this->url = $url;
    }
}

interface SearchDao{
    public function findName(Search $s);
   
}