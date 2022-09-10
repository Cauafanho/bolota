<?php
include 'conxtcc.php';
$nome=$_POST['v1'];
$email=$_POST['v2'];
$telefone=$_POST['v3'];
$rg=$_POST['v4'];
$cnh=$_POST['v5'];
$cpf=$_POST['v6'];
$senha=$_POST['v7'];
$conf_senha=$_POST['v8'];

if($senha == $conf_senha){
    
    echo "Cadastro Realizado com Sucesso!!!";
    $in="insert into cadastro(nome, email, telefone, rg, cnh, cpf, senha, conf_senha)values('$nome', '$email', '$telefone', '$rg', '$cnh', '$cpf', '$senha', '$conf_senha');";
    $r=mysqli_query($conn,$in);
    header("refresh:1; url=pagprincipal.html");

}

else{

    echo "Erro!!A Senha Não Bate com Confirmar Senha!!";
    header("refresh:1; url=pagprincipal.html");

}

?>