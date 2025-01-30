<?php 

    class person{

        private $name;
        private $age_1;
        private $accountNumber;

        function __construct(){}

        function setValue($name,$age,$accountNumber){
            $this->name = $name;
            $this->age_1=$age;
            $this->accountNumber=$accountNumber;
        }

        function bio(){
            echo "hello my name is ".$this->name." and my age is ".$this->age_1;
        }

        function makePayment(){
            echo "payment successfull from account ".$this->accountNumber." thank you ".$this->name;
        }

    }


    $person_1=['BIPLUCK SHRESTHA',30,121219201212];
    $person_2=['RAM SHRESTHA',40,1312831231238123];


    $p1 = new person();
    $p1->setValue($person_1[0],$person_1[1],$person_1[2]);
    $p1->bio();
    echo "<hr>";
    $p1->makePayment();
    echo "<hr>";

    $p2 = new Person();
    $p2->setValue($person_2[0],$person_2[1],$person_2[2]);
    $p2->bio();
    echo "<hr>";
    $p2->makePayment();


