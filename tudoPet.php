<?php

session_start(); //Iniciar a sessão

//inlcuir conexão com o banco
include_once "php/conexao.php";
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $raca=$_POST['raca'];
    $porte=$_POST['porte'];
    $peso=$_POST['peso'];
    $local=$_POST['local'];
    $sobre=$_POST['sobre'];
	
    
//Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($dados);

if($dados['editPet']){

     //Criar a query editar no DB
     $query_usuario = "UPDATE tbl_pet SET cod_pet ='$id', nome_pet='$nome', idade_pet='$idade', raca_pet='$raca', porte_pet='$porte', peso_pet='$peso', endereco='$local', sobre='$sobre' WHERE cod_pet = '$id'";
    
     //Executando a Query
     $query= mysqli_query($conexao, $query_usuario);

    //Variavel global com a mensagem de sucesso!
    $_SESSION['msg'] = "<p style='color: #008000;'>PET editado com sucesso!</p>";

    //Redirecionar para a pagina inicial
    header("Location: tabelaPet.php");
}

if($dados['apagaPet']){

    //Criar a query apagar no DB
    $query_deleta = "DELETE FROM tbl_pet WHERE cod_pet = $id";
    
    
    //Executando a Query
    $query = mysqli_query($conexao, $query_deleta);

   //Variavel global com a mensagem de sucesso!
   $_SESSION['msg'] = "<p style='color: #008000;'>Pet apagado com sucesso!</p>";

   //Redirecionar para a pagina inicial
   header("Location: tabelaPet.php");

}



?>
