<?php
    
    //for ($x = 0; $x < 11; $x++){
    //    echo $x;
    //}

    //echo'<br>'

    //$x = 1;

    // while($x <= 15) {
    //   echo "Number: ".$x."<br>";
    //   $x++;
    // } 


    // $posts = ['First post','Second post', 'Third post'];

    // for ($x = 0; $x < count($posts); $x++){
    //     echo $posts[$x];
    //     echo '<br>';
    // }

    // $x = 1;
    // while($x <= 15) {
    //     echo "Number: ".$x."<br>";
    //     $x++;
    // }
  

    // $x = 1;

    // do{
    //     echo 'Number: '.$x.'<br>';
    //     $x++;
    // } while ($x <= 5);

    //$posts = ['First post','Second post', 'Third post'];

    // foreach ($posts as $post) {
    //     echo $post;
    //     echo '<br>';
    // }


    // foreach ($posts as $index => $post){
    //     echo $index.'-'.$post.'<br>';
    // }



    $person = [

            'first_name' => 'Brad',
            'last_name' => 'Traversy',
            'email' => 'dtraversy@gmail.com',   

        ];

    foreach ($person as $key => $value) {
    
        echo $key.' - '.$value.'<br>';

    }