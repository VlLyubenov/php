<?php

$age = 20;

if ($age >= 18) {
    echo 'You are old enaugh to vote!';
} else {
    echo 'You are not old enough to vote!';
}

echo '<br>';

if ($age >= 21) {
    echo 'You are old enaugh to drink in the US!';
} else {
    echo 'You are not old enough to drink in the US!';
}

echo '<br>';

$t =date('H');

if ($t < 12) {
    echo 'Good morning!';
} elseif ($t < 17) {
    echo 'Good afternoon!';
} else {
    echo 'Good evening!';
}

echo '<br>';

$posts = ['First post'];

if (empty($posts)){
    echo 123;
}
if (!empty($posts)){
    echo 456;
}

echo '<br>';

echo !empty($posts) ? $posts[0] : 'No posts';

echo '<br>';

$first_post = !empty($posts) ? $posts[0] : 'No posts';
$first_post = $posts[0] ?? null;
echo $first_post;

echo '<br>';
echo '<br>';
echo '<br>';
////////////

$fav_color = 'yellow';

switch ($fav_color) {
    case 'red':
        echo 'Your favourite color is red!';
        break;
    case 'green':
        echo 'Your favourite color is green!';
        break;
    default:
        echo 'Your favourite color is something else!';
}

echo '<br>';


