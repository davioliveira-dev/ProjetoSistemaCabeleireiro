<?php

$server = "localhost";
$user = "root";
$senha = "";
$db_name = "bd_salao";
$email = $_POST['login'];
$senha = $_POST['senha'];


$conexao = mysqli_connect($server,$user,$senha,$db_name);

mysql_select_db('bd_salao') or trigger_error(mysql_error());

$sql = "SELECT id "

?>
