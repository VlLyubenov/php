<?php

    $fruits = ['apple','orange','pear'];

    // echo count($fruits);
    // echo '<br>';
    // var_dump(in_array('apple', $fruits));
    // echo '<br>';
    // var_dump(in_array('apples',$fruits));
    // echo '<br>';

    // $fruits[] = 'grape';

    // array_push($fruits,'bluebary','strawbary');
    // array_unshift($fruits,'mango');
    // array_pop($fruits);
    // array_shift($fruits);
    // // unset($fruits[2]);

    // $chunked_array = array_chunk($fruits,2);

    // print_r($fruits);
    // echo '<br>';
    // print_r($chunked_array);

    // echo '<br>';

    // $arr1 = [1,2,3];
    // $arr2 = [4,5,6];

    // $arr3 = array_merge($arr1,$arr2);
    // $arr4 = [];
    // $arr4 = [...$arr1,$arr2];


    // print_r($arr4);

    // $a = ['green','red','yellow'];
    // $b = ['avocaro','apple','bananna'];


    // $c =  array_combine($a,$b);

    // print_r($c);

    // $keys = array_keys($c);

    // echo '<br>';
    // print_r($keys);

    // $flipped_array = array_flip($c);
    // print_r($flipped_array);

    $numbers = range(1, 20);
    print_r($numbers);
    echo '<br>';
    echo '<br>';

    $new_numbers = array_map(function($number){
        return "Number: ${number}";
    },$numbers);

    //print_r($new_numbers);

    $lessThan10 = array_filter($numbers, fn($number) => 
    $number < 10);

    //print_r($lessThan10);

    $sum = array_reduce($numbers, fn($carry, $number) => 
    $carry + $number);

    var_dump($sum);







