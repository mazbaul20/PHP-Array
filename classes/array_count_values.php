<?php
    //include 'classes/array_count_values.php';
    //ke kotobar ase setake se count korbe
    $name = array("Jibon","Mamun","Akbar","Mamun","Jibon","Jibon","Hadiul","Jibon","Akbar");
    
    $count = array_count_values($name);
    print("<pre>");
    print_r($count);
    print("</pre>");
?>