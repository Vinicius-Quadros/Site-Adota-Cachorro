<?php
    session_start();


	include_once('conexao.php');
    $nome=$_POST['usu'];
    $senha=$_POST['senha'];
	

	
	$sql = "INSERT INTO tbl_login
	(id_usuario, senha_usuario) VALUES 
	('$nome', '$senha')";
	
    $query= mysqli_query($conexao, $sql);

    $_SESSION['msg'] = "<p style='color: #008000;'>Funcionário salvo com sucesso!</p>";
    header("Location: ../tabelaFuncio.php");
?>

