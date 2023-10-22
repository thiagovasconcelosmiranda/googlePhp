<?php 

class Icone {
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

interface IconeDao{
    public function findAll();
    public function insert(Icone $i);
    public function update(Icone $i);
    public function delete(Icone $i);
}