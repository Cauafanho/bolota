<?php
include 'conxtcc.php';
$cor=$_POST['v1'];
$placa=$_POST['v2'];
$crlv=$_POST['v3'];

    $in="INSERT INTO cadastroauto(cor, placa, crlv)VALUES('$cor', '$placa', '$crlv');";
    $r=mysqli_query($conn,$in);
    header("refresh:1; url=.html");

?>