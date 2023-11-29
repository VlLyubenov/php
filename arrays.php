<?php

    $numbers = [1,2,3,4];
    $fruits = array('apple','orange','kiwi');


    echo $fruits[1];
    echo " ";

    //Associative array
    $colors = [
        1 => 'red',
        4 => 'blue'

    ];
    echo $colors[4];
    echo "<br> ";

    $hex = [
        'red' => 'f00',
        'blue' => '0f0',
        'green' => '00f',
    ];

    echo $hex['green'];
    echo "<br>";

    $person = [
        'first_name' => 'John',
        'last_name' => 'Davidson',
        'email' => 'davidson@gmail.com',
    ];


    echo $person['first_name'];
    echo "<br>";

    $people = [
        $person = [
            'first_name' => 'John',
            'last_name' => 'Davidson',
            'email' => 'davidson@gmail.com',
        ],

        $person = [
            'first_name' => 'Brad',
            'last_name' => 'Traversy',
            'email' => 'dtraversy@gmail.com',
        ],

        $person = [
            'first_name' => 'Ian',
            'last_name' => 'Stainbeg',
            'email' => 'i.stainbeg@gmail.com',
        ],

    ];

    echo $people[1]['email'];
    echo "<br>";

    var_dump(json_encode($people));
