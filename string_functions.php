<?php

    $string = 'Hello, World!';

    if (str_starts_with($string,'Hello')) {
        echo 'String starts with "Hello"';
    }

    echo '<br>';

    if (str_ends_with($string,'World!')) {
        echo 'String ends with "World!"';
    }

    echo '<br>';

    if (str_contains($string,'World!')) {
        echo 'String contains "World!"';
    }

    echo '<br>';

    printf('%s likes to %s', 'Brad', 'code');
    printf('%f + %f = %f', 4.3, 4.5, 4.3 + 4.5);
