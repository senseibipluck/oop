<?php

    class Person{

        private $name ;
        private $age ;

        private $accountNumber;

        function __construct($name,$age,$accountNumber){
            $this->name=$name;
            $this->age=$age;
            $this->accountNumber=$accountNumber;
        }

        function bio(){
            echo "My name is ".$this->name." and my age is ".$this->age;
        }

        private function makePayment(){
            #code for payment
            echo "payment successfull from account ".$this->accountNumber." thank you ".$this->name;
        }

        private function connectToIps(){

        }

        function payment(){
            $this->makePayment();
            $this->connectToIps();
        }

    }


        
    $person_1 = ['Bipluck shrestha',30,123122343432] ;
    $person_2 = ['hari shrestha',34,132423423432234] ;

    $p1 = new Person($person_1[0],$person_1[1],$person_1[2]);
    $p1->bio();
    echo "<hr>";
    $p1->payment();

    echo "<hr>";
    $p2 = new Person($person_2[0],$person_2[1],$person_2[2]);
    $p2->bio();
    echo "<hr>";
    $p2->payment();




