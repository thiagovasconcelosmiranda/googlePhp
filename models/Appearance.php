<?php

class Appearance {
    private $id;
    private $body;
    private $ip;
    private $ul;
    private $input;
    private $button;
    private $letter;
    private $footer;

    public function getId(){
      return $this->id;
    }
    public function setId($id){
        $this->id = $id; 
    }

      public function getBody(){
        return $this->body;
      }
      public function setBody($body){
          $this->body = $body; 
      }

      public function getIp(){
        return $this->ip;
      }
      public function setIp($ip){
          $this->ip = $ip; 
      }

      public function getUl(){
        return $this->ul;
      }
      public function setUl($ul){
          $this->ul = $ul; 
      }

      public function getInput(){
        return $this->input;
      }
      public function setInput($input){
          $this->input = $input; 
      }

      public function getButton(){
        return $this->ul;
      }
      public function setButton($button){
          $this->button = $button; 
      }

      public function getLetter(){
        return $this->letter;
      }
      public function setLetter($letter){
          $this->letter = $letter; 
      }

      public function getFooter(){
        return $this->footer;
      }
      public function setFotter($footer){
          $this->footer = $footer; 
      }

}

interface AppearenceDao{
    public function findByIp($id);
    public function insert (Appearance $a);
    public function delete($ip);
}