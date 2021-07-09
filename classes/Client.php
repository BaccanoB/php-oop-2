<?php 
    require_once __DIR__."/Users.php";
    require_once __DIR__."/Card.php";
    require_once __DIR__."/Products.php";
    class Client extends Users{
        public $address;
        private $creditCard;
        public $clientCard;

        function __construct($name,$surname,$gender,$address,$creditCard,$clientCard=Null) {
           parent::__construct($name,$surname,$gender);
           $this->address=$address;
           $this->creditCard=$creditCard;
           $this->clientCard=$clientCard;
        }

        public function getFullName(){
            $appellation = ($this->gender == 'F') ? 'Sig.ra ' : 'Sig. ';
            return $appellation.parent::getFullName();
        }

        public function getDiscount(){
            $sconto = ($this->clientCard->card==Null)? 'NON HAI DIRITTO ALLO SCONTO' : 'il tuo sconto è: '. $this->clientCard->discount.'%';
            return $sconto;
        }

        // public function getFinalPrice(){
        //     $finalPrice=($this->price->totalPrice * 100) / $this->clientCard->discount;
        //     return $finalPrice=$this->price->totalPrice - $finalPrice;
        // }

    }

    $shopping= new Products(2,16);

    $cardBeatrice= new Card (1,30);

    // $price=new Products (2,16);
