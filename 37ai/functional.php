<?php 
    
    $person_1=['bipluck shrestha',30,12931829038102932];
    $person_2=['ram shrestha',31,123147832493840932432];

    function bio($name,$age){
        echo "my name is ".$name." and my age is ".$age;
    }

    function makePayment($name,$accountNumber){
        #payment code
        echo "payment successfull from account ".$accountNumber." with name ".$name;
    }

    bio($person_1[0],$person_1[1]);
    echo "<hr>";
    makePayment($person_1[0],$person_1[2]);
    echo "<hr>";
    bio($person_2[0],$person_2[1]);
    echo "<hr>";
    makePayment($person_2[0],$person_2[2]);


?>