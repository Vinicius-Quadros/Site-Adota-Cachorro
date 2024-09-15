<?php

session_start(); //Iniciar a sessão

//inlcuir conexão com o banco
include_once "php/conexao.php";
    $id=$_POST['id'];
    $nome=$_POST['usu'];
    $senha=$_POST['senha'];
	
    
//Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($dados);

if($dados['editFuncio']){

     //Criar a query editar no DB
     $query_usuario = "UPDATE tbl_login SET cod_usuario ='$id', id_usuario='$nome', senha_usuario='$senha' WHERE cod_usuario = '$id'";
    
     //Executando a Query
     $query= mysqli_query($conexao, $query_usuario);

    //Variavel global com a mensagem de sucesso!
    $_SESSION['msg'] = "<p style='color: #008000;'>Funcionário editado com sucesso!</p>";

    //Redirecionar para a pagina inicial
    header("Location: tabelaFuncio.php");
}

if($dados['apagaFuncio']){

    //Criar a query apagar no DB
    $query_deleta = "DELETE FROM tbl_login WHERE cod_usuario = $id";
    
    
    //Executando a Query
    $query = mysqli_query($conexao, $query_deleta);

   //Variavel global com a mensagem de sucesso!
   $_SESSION['msg'] = "<p style='color: #008000;'>Funcionário apagado com sucesso!</p>";

   //Redirecionar para a pagina inicial
   header("Location: tabelaFuncio.php");

}



?>
