<?php
    class Personne{
        public $name;
        public $adress;
        public $zipcode;
        public $phone;
        public $email;

        //public function ecoute(param1, param2){  //le methode function
            // code
        //}

        public function getName(){
            return $this -> name;
        }

        public function setName($name){
            $this->name = $name;
        }
    }
?>