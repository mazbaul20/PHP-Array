<?php
    //include 'classes/array.php';
    $array = array(
        "Jibon"    => "23",
        "Mamun"    => 24,
        "Mehedi"   => 22,
        "Mazbual"  => 22,
        "Tofazzol" => "55",
        "Sadhin"   => 45
    );
    foreach($array as $key=>$vlaues){
        echo $key.",".$vlaues."<br/>";
    }
?>