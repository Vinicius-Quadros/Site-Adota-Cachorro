<?php
	include_once('conexao.php');
	$CPF=$_POST['cpf'];
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
	$email=$_POST['email'];
    $nasc=$_POST['nasc'];
    $sexo=$_POST['sexo'];
    $CEP=$_POST['cep'];
	$endereco=$_POST['endereco'];
    $num=$_POST['num'];
    $complemento = $_POST['complemento'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['ciadade'];
    $estado=$_POST['estado'];
 
	
	$sql = "INSERT INTO tbl_adotante
	(cpf_adotante, nome_adotante, telefone_adotante, email_adotante, nascimento_adotante, sexo_adotante, cep_adotante, descr_logr_adotante, num_logr_adotante, descr_complem_adotante, descr_bairro_adotante, descr_cidade_adotante, UF_adotante) VALUES 
	(REPLACE(REPLACE('$CPF','.', ''),'-',''), '$nome', '$telefone', '$email', '$nasc', '$sexo', '$CEP', '$endereco', '$num', '$complemento', '$bairro', '$cidade', '$estado')";
	
    
    $query= mysqli_query($conexao, $sql);
    
?>

<script>
	window.location.href = '../index.html'
</script>


<!--cpf = document.form.cpf.value.replace(/[^0-9]/g,"").length-->