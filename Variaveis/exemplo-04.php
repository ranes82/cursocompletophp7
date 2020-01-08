<?php

$nome = (int)$_GET['a'];

//var_dump($nome);
echo $nome.'<br>';

$ip = $_SERVER['REMOTE_ADDR']; //IP DO CLIENTE
echo $ip.'<br>';
$caminho = $_SERVER['SCRIPT_NAME']; // URL APÓS DOMINIO
echo $caminho;

?>