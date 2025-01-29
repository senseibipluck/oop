<?php
class Person{

        private $name ;
        private $age ;
        private $accountNumber;

        function __construct($name,$age,$accountNumber){
            $this->name = $name;
            $this->age = $age;
            $this->accountNumber=$accountNumber;
        }

        private function bio(){
            echo "My name is ".$this->name." and my age is ".$this->age ;            
        }
        public function biohie(){
            $this->bio();
        }

        function makePayment(){
            echo "payment successfull with account".$this->accountNumber;
        }
        
}


$person_1=['bipluck shrestha',30,1213122319028390182309];
$person_2=['ram shrestha',31,123123123123123123123213];


$p1 = new Person($person_1[0],$person_1[1],$person_1[2]);

$p2 = new Person($person_2[0],$person_2[1],$person_2[2]);


$p1->name = 'Sita shrestha';
$p1->biohie();
echo "<hr>";
$p1->makePayment();
echo "<hr>";


$p2->biohie();
echo "<hr>";
$p1->makePayment();
echo "<hr>";

echo "hello world";