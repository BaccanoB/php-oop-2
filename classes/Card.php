<?php 

    class Card{
        public $card;
        public $discount;

        function __construct($card,$discount){
            $this->card=$card;
            $this->discount=$discount;
        }

        public function setCard($card){
            $this->card=$card;
        }

        public function getCard(){
            return $this->card;
        }

    }
