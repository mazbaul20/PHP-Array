<?php
    include 'inc/header.php';
?>
<h2>Array Function</h2>
<?php
    $name = array("Mazbaul","Atikur","Mamun","Rezaul","Rezwanul");
    $age = array("23","21","25","26","24");

    $combine = array_combine($name,$age);

    print("<pre>");
    print_r($combine);
    print("</pre>");
?>




<?php include 'inc/footer.php'?>