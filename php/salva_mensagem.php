<?php
	include_once('conexao.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	
	$sql= "INSERT INTO mensagem
	(nome, email, assunto, texto) VALUES 
	('$nome', '$email', '$assunto', '$mensagem')";
	$query= mysqli_query($conexao, $sql);
	

?>

<script>
	window.alert("Mensagem enviada com sucesso. Tenha um ótimo dia!")
	window.location.href = '../index.html'
</script>

