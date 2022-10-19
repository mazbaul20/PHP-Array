<?php
    //include 'classes/array_count_values.php';
    //ke kotobar ase setake se count korbe array_key_values() function er madhome
    $name = array("Jibon","Mamun","Akbar","Mamun","Jibon","Jibon","Hadiul","Jibon","Akbar");
    $age = array("34","22","34","22","33","34","44","55","23");
    
    $count = array_count_values($name);
    print("<pre>");
    print_r($count);
    print("</pre>");
?>