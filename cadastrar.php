<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$fone = $_POST['fone'];
$data_nasc = $_POST['data_nasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if(empty($nome) || empty($endereco) || empty($cep)|| empty($fone)|| empty($data_nasc)|| empty($rg)|| empty($cpf)|| empty($sexo)|| empty($email)|| empty($senha)){
    echo("<script type='text/javascript'>
    alert(Preencha todos os campos!');
    </script>");
}
else{
    $result_usuario = "INSERT INTO tb_usuario (nome,endereco,cep,fone,data_nasc,cpf,rg,sexo,email,senha) VALUES ('$nome','$endereco','$cep','$fone','$data_nasc','$cpf','$rg','$sexo','$email','$senha')";
}
$resultado_usuario = mysqli_query($conexao,$result_usuario);

if(mysqli_insert_id($conexao))
{
  echo("<script type='text/javascript'>
           alert('Usuário cadastrado com sucesso!');
        </script>");
}
else{
    die("Falha na conexão: ". mysqli_connect_error());
}
?>