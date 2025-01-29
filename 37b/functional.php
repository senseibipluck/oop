<?php

function bio($name,$age){
    #
    echo " hello my name is ".$name." and my age is ".$age;
}

function makePayment($accoutNumber,$name){
    #payment code
    echo "payment successfull form account ".$accoutNumber." thank you ".$name;
}

$person_1= ['bipluck shrestha',30,123123123123123123];
$person_2= ['ram shrestha',31,12382183918209312123123];

bio($person_1[0],$person_1[1]);
echo "<hr>";
bio($person_2[0],$person_2[1]);
echo "<hr>";
makePayment($person_1[2],$person_1[0]);
echo "<hr>";
makePayment($person_2[2],$person_1[0]);