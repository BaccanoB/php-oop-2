<?php 
    require_once __DIR__."/Users.php";
    require_once __DIR__."/Card.php";
    class Client extends Users{
        private $address;
        private $creditCard;
        public $clientCard;

        function __construct($name,$surname,$gender,$address,$creditCard,$clientCard=Null) {
           parent::__construct($name,$surname,$gender);
           $this->address=$address;
           $this->creditCard=$creditCard;
           $this->clientCard=$clientCard;
        }

        public function setAddress($address){
            $this->address=$address;
        }

        public function setDiscount($discount){
            $this->discount=$discount;
        }

        public function getFullName(){
            $appellation = ($this->gender == 'F') ? 'Sig.ra ' : 'Sig. ';
            return $appellation.parent::getFullName();
        }

        public function getAddress(){
            return $this->address;
        }

    }

    $cardBeatrice= new Card (1,30);

    $user=new Client("beatrice","baccano","F","pinvjdjvdh","bhashdsh",$cardBeatrice);
    $user->setAddress("via pinco pallo");
    echo $user->getFullName()." ".$user->getAddress();
    var_dump($user);
    echo $user->clientCard->card;
