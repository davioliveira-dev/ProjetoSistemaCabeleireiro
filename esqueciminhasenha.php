<?php

include_once("conexao.php");

$email = $_POST['email'];

$result = mysqli_query($conexao,"SELECT * FROM `tb_usuario` 
WHERE `email` = '$email' ");

if(mysqli_num_rows ($result) > 0 )
{
    echo("<script type='text/javascript'>
    alert('Um e-mail foi enviado para recuperação da sua senha!');
  </script>");
  echo("<center><a href='login.html'>Voltar ao Login</a></center>");
}
else{
    echo("<script type='text/javascript'>
    alert('Você não possui um cadastro com esse email!');
  </script>");
  echo("<center><a href='esqueciminhasenha.html'>Voltar ao início</a></center>");
}

?>