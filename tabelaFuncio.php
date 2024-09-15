<?php

  session_start(); //Iniciar a sessão
  include_once "php/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/dog'v.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/telaprinfun.css">



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
                <a class="nav-link" href="FuncioLogin.php">Sair</a>
              </li>
          </ul>
        </div>
    </nav> 

    <h1>BANCO DE FUNCIONÁRIOS</h1>
   
  



    <?php
    //varificar se existe a mensagem
    echo "<div style = 'margin-left: 40%; margin-top:3%; font-size:25px; background-color: white; border-radius:20px; margin-right:40%;'>";
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    echo "</div>";



    //Criar query para recuperar usuarios
      $query_usuarios = "SELECT cod_usuario, id_usuario, senha_usuario FROM tbl_login ORDER BY cod_usuario";
    //Preparar Query
      $result_usuarios = $conn->prepare($query_usuarios);
    //Executar a Query
      $result_usuarios->execute();
      
    //Inicio do Formulário
    echo "<div style='margin-left: 40%; font-size: 25px; background-color: white; margin-right:40%; padding: 1%; border-radius: 20px; margin-top:'1%;'>" ;
    echo "<form method='POST' action='FuncioEdit.php'>";

      //Ler os regitros retornando do BD
      while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
          //var_dump($row_usuario); 
          extract($row_usuario);
          echo "<input type='checkbox' name='usuario[$cod_usuario]' value='".$cod_usuario."'>";
          echo " ID: $cod_usuario <br>";
          echo "Usuário: $id_usuario <br>";
          echo "Senha: $senha_usuario <br>";
          echo "<br>";
      }

      
      
      echo "<input type='submit' value='Editar' name='editFuncio' style='font-size: 40px; background-color: #007BFF; padding: 0.5%;color: aliceblue; border-radius: 20px;
      margin-top: 4%; margin-left: -3%;'>";

      echo "<a href='telaprinfun.html'><input type='button' value='Voltar' style='font-size: 40px; background-color: #007BFF; padding: 0.5%;color: aliceblue; border-radius: 20px; float: right;
      margin-top: 4%; margin-right:35%;'></a>";

    //Fim do Formulário
     echo "</form>";
     echo "<a href='FuncioSalva.html'><input type='button' value='Novo' style='font-size: 40px; background-color: #007BFF; padding: 0.5%;color: aliceblue; border-radius: 20px; float: right; margin-top:-20%'></a>";
     echo "</div>"
    ?>



      
<footer style="margin-top: 19.9%;">
        <div class="direitos">
          <img src="imagens/pata-de-cachorro.png" width="66px"><b style="margin-left: 1%;"> &reg; Todos os direitos reservados a página </b><img src="imagens/pata-de-cachorro.png" width="66px" style="margin-left: 1%;">
        </div>

        <div class="logo">
          <img src="imagens/DOG'S V.png" width="170px" style="border-radius: 100mm;">
        </div>
       
    </footer>

</body>
</html>