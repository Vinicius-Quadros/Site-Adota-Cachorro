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
                <a class="nav-link" href="FuncioLogin.html">Sair</a>
              </li>
          </ul>
        </div>
    </nav> 

    <h1>BANCO DE DADOS ADOTANTES</h1>
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
    $query_usuario = "SELECT cpf_adotante, nome_adotante, telefone_adotante, email_adotante, nascimento_adotante, sexo_adotante, cep_adotante, descr_logr_adotante, num_logr_adotante, descr_complem_adotante, descr_bairro_adotante, descr_cidade_adotante, UF_adotante FROM tbl_adotante WHERE cpf_adotante = $valor_pesq";

    //Preparar a Query
    $result_usuarios = $conn->prepare($query_usuario);

    //Execeutar a Query
    $result_usuarios->execute();


    //inicio do formulário
    echo "<form method='POST' action='tudoAdotante.php' class='form'>";

    //Ler o registro retornado do BD
    while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($row_usuario);
        extract($row_usuario); 
        echo "<label>CPF:</label> <br>  <br>
        <input type='text' name='cpf' id='cpf' size='30' placeholder='000.000.000-00' required oninput='this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');' value='$cpf_adotante'>
        <br><br> <br>
        <label>Seu nome:</label> <br> <br>
        <input type='text' name='nome' size='30' onkeypress='return lettersOnly(event);' placeholder='Nome e Sobrenome' required value='$nome_adotante'> 
         <br> <br> <br>
        <label>Seu Telefone:</label> <br> <br>
        <input type='text' name='telefone' id='telefone' size='30'  placeholder='(DD) 00000-0000' required value='$telefone_adotante'>
         <br> <br> <br>
        <label>Seu E-mail:</label> <br> <br>
        <input type='text' name='email' id='email' size='30'  placeholder='exemplo@gmail.com' required value='$email_adotante'> 
        <br> <br> <br>
        <label>Nascimento:</label> <br> <br>
        <input type='text' name='nasc' required value='$nascimento_adotante'> 
        <br><br> <br>
        <label>Sexo: </label> <br> <br>
        <input type='text' name='sexo' required value='$sexo_adotante'>       
        <br> <br> <br>
        <label> CEP:</label> <br> <br>
        <input type='text' name='cep' id='cep' size='20' placeholder='00000-000' required value='$cep_adotante'> 
        <br> <br> <br>
        <label>Endereço:</label> <br> <br>
        <input type='texto' name='endereco' size='30' placeholder='Nome da Rua' onkeypress='return lettersOnly(event);' required value='$descr_logr_adotante'> 
        <input type='text' name='num' placeholder='Número' size='6' style='margin-left: 2%;' maxlength='4' required oninput='this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');' value='$num_logr_adotante'> <br> <br>
        <input type='text' name='complemento' size='30'  onkeypress='return lettersOnly(event);' placeholder='Complemento' value='$descr_complem_adotante'><br> <br>
        <input type='text' name='bairro' size='30'  onkeypress='return lettersOnly(event);'' placeholder='Bairro' required value='$descr_bairro_adotante'>  <br> <br>
        <input type='text' name='cidade' size='30'  onkeypress='return lettersOnly(event);' placeholder='Cidade' required value ='$descr_cidade_adotante'>  <br> <br>
        <input type='text' name='estado' size='30'  onkeypress='return lettersOnly(event);' placeholder='Estado (Sigla)' required value = '$UF_adotante'> <br> <br>";
    
    }

    echo "<input type='submit' value='Editar' name='editUsuarios' style='margin-left:2%;'>";
    echo "<input type='submit' value='Apagar' name='apagaUsuario' style='margin-left:5% ;'>";
    echo "<a href='tabelaAdotante.php'><input type='button' value='Voltar' style='margin-left:5%;'></a>";

    //fim do formulário
    echo "</form>";
} else{
    //Variavel global com a mensagem de sucesso!
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Nenhum Usuário Editado</p>";

    //Redirecionar para a pagina inicial
    header("Location: tabelaAdotante.php");
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