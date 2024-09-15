<?php

if(isset($_POST['usu']) && isset($_POST['senha'])) {
    
  include_once "php/conexao.php";

  $usu = $_POST['usu'];
  $senha = $_POST['senha'];

  $sql_code = "SELECT cpf_adotante, nome_adotante FROM tbl_adotante WHERE nome_adotante = '$usu'";
  $sql_code1 = "SELECT cpf_adotante, nome_adotante FROM tbl_adotante WHERE nome_adotante = '$usu' and cpf_adotante = '$senha'";
  $sql_query = $conexao->query($sql_code) or die($conexao->error);
  $sql_query1 = $conexao->query($sql_code1) or die($conexao->error);

  if($sql_query->num_rows == 0) {
    $_SESSION['msg'] = "<p style='color: #f00;'>Usuário está incorreto!</p>";
  } else {
      if($sql_query1->num_rows == 0) {
        $_SESSION['msg'] = "<p style='color: #f00;'>Senha está incorreta!</p>";
      } else {
        echo "<script>alert('Bem vindo de Volta, sua adoção foi registrada e entraremos em contato para finalizarmos o processo!')
        window.location='index.html';</script>";
                
      }
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/dog'v.ico" type="image/x-icon">
    <title>Login/Banco</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/FuncioLogin.css">
    <script src="js/login.js"></script>
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
                <a class="nav-link" href="sobre.html">Sobre Nós</a>
              </li>
            <li class="nav-item active">
              <a class="nav-link" href="contato.html">Contato</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="cadastrar.html">Cadastrar</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="FuncioLogin.php">Funcionários</a>
            </li>
          </ul>
        </div>
    </nav> 


    <h1>Login</h1>


    <?php
      echo "<div style = 'margin-left: 40%; margin-top:3%; font-size:25px; background-color: white; border-radius:20px; margin-right:40%;'>";
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      echo "</div>";
    ?>

    <div class="corpo">
        <form action="" onsubmit="return login();" name="form" method="POST">
            <label><h3>Usuário</h3></label> <br>
            <input type="text" name="usu" size="33" required placeholder="Nome e Sobrenome"><span></span><br> <br>
            <label><h3>Senha</h3></label> <br>
            <input type="password" name="senha" size="33" required placeholder="Seu CPF"> <span></span>  <br> <br>
            <input name="Submit" class="cadastrar" type="submit" value="Acessar">
        </form>
    </div>


    <footer>
        <div class="direitos">
          <img src="imagens/pata-de-cachorro.png" width="66px"><b style="margin-left: 1%;"> &reg; Todos os direitos reservados a página </b><img src="imagens/pata-de-cachorro.png" width="66px" style="margin-left: 1%;">
        </div>

        <div class="logo">
          <img src="imagens/DOG'S V.png" width="170px" style="border-radius: 100mm; margin-top: -50px;">
        </div>
        <div class="rede">
          <img src="imagens/instagram.png" width="66px">
          <img src="imagens/whatsapp.png" width="66px">
          <img src="imagens/facebook.png" width="66px">
          <img src="imagens/Twitter.png" width="66px">
        </div>
    </footer>
</body>
</html>