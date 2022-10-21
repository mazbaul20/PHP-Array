<?php
    //include 'classes/array_diff_key.php';
    //array_diff_key() ai function er madhome array er key gula chack kore
    $array_one = array(
        'a' => 'red',
        'b' => 'green',
        'c' => 'blue',
        'd' => 'yellow'
    );
    $array_two = array(
        'a' => 'red',
        'g' => 'green',
        'h' => 'blue'
    );
    $array_tree = array(
        'a' => 'red',
        'b' => 'green',
        'h' => 'blue'
    );

    $difference = array_diff_key($array_one,$array_two,$array_tree);

    print("<pre>");
    print_r($difference);
    print("</pre>");
?>