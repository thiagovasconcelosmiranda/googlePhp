<?php 

class Icone {
    private $id;
    private $name;
    private $url;
    private $loginId;


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

    public function  getLoginId(){
        return $this->loginId;
    }

    public function  setLoginId($loginId){
        $this->loginId = $loginId;
    }
}

interface IconeDao{
    public function findAll($loginId);
    public function insert(Icone $i);
    public function update(Icone $i);
    public function delete(Icone $i);
}