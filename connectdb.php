<?php

	$host = "localhost";
	$port = "5432";
	$dbname = "clientes";
	$user = "igor";
	$password = "qwerty";
	$pg_options = "--client_encoding=UTF8";

	$conexao = "host={$host} dbname={$dbname} user={$user} password={$password} port={$port} options='{$pg_options}'";
	$dbconn = pg_connect($conexao);


	if($dbconn){
		echo "Conexão: " .pg_host($dbconn);
	}else{
		echo "Erro ao conectar com o banco de dados!";
	}

	echo "<br />";
?>
