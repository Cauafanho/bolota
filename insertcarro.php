<?php
include 'conxtcc.php';
$marca=$_POST['v1'];
$modelo=$_POST['v2'];
$ano=$_POST['v3'];
$cor=$_POST['v4'];
$placa=$_POST['v5'];
$renavam=$_POST['v6'];
    
    $in="insert into cadastro_carro(marca, modelo, ano, cor, placa, renavam)values('$marca', '$modelo', '$ano', '$cor', '$placa', '$renavam');";
    $r=mysqli_query($conn,$in);
    header("refresh:1; url=escolhavaga.html");

?>