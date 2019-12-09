<?php


include_once("conexao.php");
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];


$result = mysqli_query($conexao,"SELECT * FROM `tb_usuario` 
WHERE `email` = '$email' AND `senha`= '$senha'");

if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
header('location:logado.html');
}
else{
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
  header('location:login.html');
  echo("<script type='text/javascript'>
  alert('Você não possui cadastro!');
</script>");
  }

?>