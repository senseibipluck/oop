<?php 
    
    $person_1 = ['Bipluck shrestha',30,123122343432] ;
    $person_2 = ['hari shrestha',34,132423423432234] ;


    function bio($name , $age){
        echo  "My name is ".$name." and my age is ".$age;
    }

    function makePayment($accountNumber,$name){
        #payment code
        echo "Payment successfull with account ".$accountNumber." Thankyou ".$name;
    }



    bio($person_1[0],$person_1[1]);
    echo "<hr>";
    bio($person_2[0],$person_2[1]);

    makePayment($person_1[2],$person_1[0]);

    makePayment($person_1[2],$person_2[0]);