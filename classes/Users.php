<?php 
class Users {
    private $name;
    private $surname;
    protected $gender;

    function __construct($name,$surname,$gender){
        $this->name=$name;
        $this->surname=$surname;
        $this->gender=$gender;
    }
    
    public function getFullName(){
        return $this->name." ".$this->surname;
    }
}

