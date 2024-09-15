<?php
    session_start();


	include_once('conexao.php');
    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $raca=$_POST['raca'];
    $porte=$_POST['porte'];
    $peso=$_POST['peso'];
    $local=$_POST['local'];
    $sobre=$_POST['sobre'];
	

	
	$sql = "INSERT INTO tbl_pet
	(nome_pet, idade_pet, raca_pet, porte_pet, peso_pet, endereco, sobre) VALUES 
	('$nome', '$idade', '$raca', '$porte', '$peso', '$local', '$sobre')";
	
    $query= mysqli_query($conexao, $sql);

    $_SESSION['msg'] = "<p style='color: #008000;'>PET salvo com sucesso!</p>";
    header("Location: ../tabelaPet.php");
?>