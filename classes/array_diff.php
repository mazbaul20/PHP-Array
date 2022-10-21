<?php
    //include 'classes/array_diff.php';
    //Array_diff() function er madhome duita associative array er difference ber kore
    //array_one ke dhore se difference ber korbe. value gulake chack korbe.
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
    $array_three = array(
        'a' => 'red',
        'b' => 'blue',
        'c' => 'white',
        'f' => 'perpule',
        'h' => 'skyblue'
    );

    $difference = array_diff($array_one,$array_two,$array_three );

    print("<pre>");
    print_r($difference);
    print("</pre>");
?>