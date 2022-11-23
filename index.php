<?php
    include 'inc/header.php';
?>
<h2>Array Function</h2>
<?php
    $name = array("Sakib","Abdullah","Younus");
    $age  = array(23,26,19);

    $combine = array_combine($name,$age);
    print("<pre>");
    print_r($combine);
    print("</pre>");
?>




<?php include 'inc/footer.php'?>