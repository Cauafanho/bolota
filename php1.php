<?php
    include 'conxtcc.php';

if($senha==$conf_senha){

    header("refresh:1;url=escolha.html");
    }
    
else{
    echo("Sua senha está incorreta !");
}
?>