<?php

$server = "localhost";
$user = "davioliveira-dev";
$senha = "focoforcacafe@1";
$db_name = "bd_salao";


$conexao = pg_connect($server,$user,$senha,$db_name) or die("Connection failed");

echo("<script type='text/javascript'>
        alert('Successful connection')
        </script>"
)

?>