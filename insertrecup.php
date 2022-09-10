<?php
include 'conxtcc.php';
$nova_senha=$_POST['v1'];
$conf_nova_senha=$_POST['v2'];


if($nova_senha == $conf_nova_senha){
    
    $in="update cadastro set senha = $nova_senha, conf_senha = $conf_nova_senha";
    $r=mysqli_query($conn,$in);
    header("refresh:1; url=pagprincipal.html");
}

else{

    echo "Erro!!A Senha Não Bate com Confirmar Senha!!";
    header("refresh:1; url=pagprincipal.html");

}


    

?>