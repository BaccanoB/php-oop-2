<?php 
    class Products {
        public $number;
        public $price;

        function __construct($number,$price){
            $this->number=$number;
            $this->price=$price;   
        }

        public function getNumber(){
           return $this->number;
        }

        public function getPrice(){
            $totalPrice=$this->number*$this->price;
            return $totalPrice;
        }
    }