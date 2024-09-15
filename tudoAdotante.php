<?php

session_start(); //Iniciar a sessão



//inlcuir conexão com o banco
include_once "php/conexao.php";
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
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
//Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($dados);

if($dados['editUsuarios']){

     //Criar a query editar no DB
     $query_usuario = "UPDATE tbl_adotante SET cpf_adotante ='$CPF', nome_adotante='$nome', telefone_adotante='$telefone', email_adotante='$email', nascimento_adotante='$nasc', sexo_adotante='$sexo', cep_adotante='$CEP', descr_logr_adotante='$endereco', num_logr_adotante='$num', descr_complem_adotante='$complemento', descr_bairro_adotante='$bairro', descr_cidade_adotante='$cidade', UF_adotante='$estado' WHERE cpf_adotante = '$CPF'";
    
     //Executando a Query
     $query= mysqli_query($conexao, $query_usuario);

    //Variavel global com a mensagem de sucesso!
    $_SESSION['msg'] = "<p style='color: #008000;'>Usuário editado com sucesso!</p>";

    //Redirecionar para a pagina inicial
    header("Location: tabelaAdotante.php");
}

if($dados['apagaUsuario']){

    //Criar a query apagar no DB
    $query_deleta = "DELETE FROM tbl_adotante WHERE cpf_adotante = $CPF";
    
    
    //Executando a Query
    $query = mysqli_query($conexao, $query_deleta);

   //Variavel global com a mensagem de sucesso!
   $_SESSION['msg'] = "<p style='color: #008000;'>Usuário apagado com sucesso!</p>";

   //Redirecionar para a pagina inicial
   header("Location: tabelaAdotante.php");

}


?>
