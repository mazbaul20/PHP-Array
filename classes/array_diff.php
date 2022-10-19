<?php
    //include 'classes/array_diff.php';
    //Array_diff() function er madhome duita associative array er difference ber kore
    $array_one = array(
        'a' => 'red',
        'b' => 'green',
        'c' => 'blue',
        'd' => 'yellow'
    );
    $array_two = array(
        'a' => 'red',
        'b' => 'green',
        'c' => 'blue'
    );

    $difference = array_diff($array_one,$array_two);

    print("<pre>");
    print_r($difference);
    print("</pre>");
?>