<?php
    //array_change_key_case.php
    //array_change_key_case() ai function er madhome key er case change kora jai
    $name = array(
        "Abdul Karim"   => 34,
        "Mazbaul Islam" => 25,
        "Mehedi hassan" => 28,
        "Jibon hassan"  => 23,
        "Sakib "        => 26,
        "Toffazzon"     => 19
   );
    $result = array_change_key_case($name, CASE_UPPER);
    print("<pre>");
    print_r($result);
    print("</pre>");
?>