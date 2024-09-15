<?php
session_start(); //Iniciar a sessão
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/dog'v.ico" type="image/x-icon">
    <title>Adotantes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/telaprinfun.css">
    <link rel="stylesheet" href="css/adodanteedit.css">
    <script src="js/contato.js"></script>
    
    
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">DOG'S V </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="telaprinfun.html">Voltar</a>
              </li>
            <li class="nav-item active">
                <a class="nav-link" href="FuncioLogin.php">Sair</a>
              </li>
          </ul>
        </div>
    </nav> 

    <h1>BANCO DE DADOS FUNCIONARIOS</h1>
    <br>






<?php
// Limpar o buffer
ob_start(); 

//inlcuir conexão com o banco
include_once "php/conexao.php";


//receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//var_dump($dados); 

if(!empty($dados['usuario'])){
    //Recuperar os ID dos usuarios e converter em uma string
    $valor_pesq = implode(", ", $dados['usuario']);
    //var_dump($valor_pesq);

    //Recuperar os usuários do  banco de dados
    $query_usuario = "SELECT cod_usuario, id_usuario, senha_usuario FROM tbl_login WHERE cod_usuario = $valor_pesq";

    //Preparar a Query
    $result_usuarios = $conn->prepare($query_usuario);

    //Execeutar a Query
    $result_usuarios->execute();


    //inicio do formulário
    echo "<form method='POST' action='tudoFuncio.php' class='form'>";

    //Ler o registro retornado do BD
    while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($row_usuario);
        extract($row_usuario); 
        echo "<label>ID</label> <br>
        <input type='text'  name='id' size='33' value='$cod_usuario'> <br> <br>
        <label>Usuário</label> <br>
        <input type='text' name='usu' size='33' value='$id_usuario'> <br> <br>
        <label> Senha</label> <br>
        <input type='text' name='senha' size='33' value='$senha_usuario'> <br> <br>";
    
    }
    
    echo "<input type='submit' value='Editar' name='editFuncio' style='margin-left:2%;'>";
    echo "<input type='submit' value='Apagar' name='apagaFuncio' style='margin-left:5% ;'>";
    echo "<a href='tabelaFuncio.php'><input type='button' value='Voltar' style='margin-left:5%;'></a><br><br> ";
   

    //fim do formulário
    echo "</form>";
    
   
} else{
    //Variavel global com a mensagem de sucesso!
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Nenhum Funcionário Editado</p>";

    //Redirecionar para a pagina inicial
    header("Location: tabelaFuncio.php");
}
?>

<footer>
        <div class="direitos">
          <img src="imagens/pata-de-cachorro.png" width="66px"><b style="margin-left: 1%;"> &reg; Todos os direitos reservados a página </b><img src="imagens/pata-de-cachorro.png" width="66px" style="margin-left: 1%;">
        </div>

        <div class="logo">
          <img src="imagens/DOG'S V.png" width="170px" style="border-radius: 100mm;">
        </div>
       
    </footer>


</body>
</html>