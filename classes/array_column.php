<?php
    //classes/array_column.php
    //MultiDimensoinal array
    $name = array(
        array(
            'id'         => '201',
            'first name' => 'Md Siful',
            'last name'  => 'islam'

        ),
        array(
            'id'         => '202',
            'first name' => 'Md Mizanur',
            'last name'  => 'Rahman'

        ),
        array(
            'id'         => '203',
            'first name' => 'Md Hadiul',
            'last name'  => 'islam'

        )
    );
    $result = array_column($name,'first name','id');
    print("<pre>");
    print_r($result);
    print("</pre>");
?>