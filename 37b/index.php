<?php 

    class Person{

        private $name;
        private $age_1;
        private $accountNumber;

        function __construct($name,$age,$accountNumber){
            $this->name = $name;
            $this->age_1 = $age;
            $this->accountNumber = $accountNumber; 
        }



        function bio(){
            echo "My name is ".$this->name." and my age is ".$this->age_1;
        }

        function makePayment(){
            echo "payment success from acount ".$this->accountNumber." thank you ".$this->name;
        }
    }


    $person_1= ['bipluck shrestha',30,123123123123123123];
    $person_2= ['ram shrestha',31,12382183918209312123123];


    $p1 = new Person($person_1[0],$person_1[1],$person_1[2]);
    $p1->bio();
    echo "<hr>";
    $p1->makePayment();

    $p2 = new Person($person_2[0],$person_2[1],$person_2[2]);
    echo "<hr>";
    $p2->bio();
    echo "<hr>";
    $p2->makePayment();