<?php

$nome = "Glaucio";

function teste()
{
	global $nome;
	echo $nome.'<br>';
}

function teste2()
{
	$nome = "João";
	echo $nome.' agora no testes2<br>';
}

teste();
teste2();
teste();

?>