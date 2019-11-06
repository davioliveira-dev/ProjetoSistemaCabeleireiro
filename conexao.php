<?php

$server = "localhost";
$user = "root";
$senha = "";
$db_name = "bd_salao";


$conexao = mysqli_connect($server,$user,$senha,$db_name);

if(!$conexao)
{
    die("Falha na conexão: ". mysqli_connect_error());
}
else
{
    echo "<script type='text/javascript'>
            alert('Conexão realizada com sucesso!');
          </script>";
}
?>