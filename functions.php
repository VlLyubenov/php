<?php

    function register_user($username){

        global $user;
        echo $username.' registered';
        $user = $username;

    }

    register_user('bander');
    echo '<br>';
    echo 'new user: '.$user;

    function sum($n1 = 4, $n2 = 5){

        return $n1 + $n2;

    }

    echo '<br>';
    echo sum(1,2);
    echo '<br>';
    echo sum();
    echo '<br>';

    

    $multiply = fn($n1,$n2) => $n1 * $n2;

    echo $multiply(2,3);
