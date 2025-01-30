<?php

$person_1=['BIPLUCK SHRESTHA',30,121219201212];
$person_2=['RAM SHRESTHA',40,1312831231238123];


function bio($name,$age){
    echo "my name is ".$name ." and my age is ".$age;
}

function makePayment ($accountNumber,$name){
    echo "payment successfull from account ".$accountNumber." thank you ".$name;
}

bio($person_1[0],$person_1[1]);
echo "<hr>";
bio ($person_2[0],$person_2[1]);
echo "<hr>";
makePayment($person_1[2],$person_1[0]);
echo "<hr>";
makePayment($person_2[2],$person_2[0]);