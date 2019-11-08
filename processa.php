<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];
$data_nasc = $_POST['data_nasc'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$senha = $_POST['senha'];


if(!($nome == "" || $nome == null ||$endereco == "" || $endereco == null||$fone == "" || $fone == null || $data_nasc == "" || $data_nasc == null || $rg == "" || $rg == null || $cpf == "" || $cpf == null ||$cpf == "" || $cpf == null ||$sexo == "" || $sexo == null ||$email == "" || $email == null ||$senha == "" || $senha == null)){
    $result_usuario = "INSERT INTO tb_usuario (nome,endereco,fone,data_nasc,rg,cpf,sexo,email,senha) VALUES ('$nome','$endereco','$fone','$data_nasc','$rg','$cpf','$sexo','$email','$senha')";
}



$resultado_usuario = mysqli_query($conexao,$result_usuario);

if(mysqli_insert_id($conexao))
{
  header("Location:login.php");
  echo("<script type='text/javascript'>
           alert('Usuário cadastrado com sucesso!');
        </script>");
}

?>