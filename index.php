<?php
    include 'inc/header.php';
?>
<h2>Array Function</h2>
<?php
    $name = array("Mazbaul","Atikur","Monnaf","Jibon","Mijanur","Siddikul");
    $age  = array(21,23,55,29,16,32);

    $combine = array_combine($name,$age);
    print("<pre>");
    print_r($combine);
    print("</pre>");
?>




<?php include 'inc/footer.php'?>