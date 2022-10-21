<?php
    //include 'classes/array_diff_assoc.php';
    //array_diff_assoc() ai function er madhome array er key and value er difference ber kore
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

    $difference = array_diff_assoc($array_one,$array_two);

    print("<pre>");
    print_r($difference);
    print("</pre>");
?>