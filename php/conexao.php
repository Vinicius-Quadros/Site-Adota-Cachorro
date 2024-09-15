<?php
	$servidor="localhost";
	$usuario="root";
	$senha="";
	$dbname="db_animal";
	$port = 3306;
	
	
	
	//Criar a conexão
	$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
	//$conn = new PDO("mysql:host=$servidor;port=$port;dbname=". $dbname, $usuario, $senha);
	$conn = new PDO("mysql:host=$servidor;dbname=" . $dbname, $usuario, $senha);




?>

