# Website de Adoção de Cachorros

**Website de Adoção de Cachorros** é um projeto desenvolvido para facilitar a adoção de cães em todo o Brasil. A plataforma permite que os usuários vejam os animais disponíveis para adoção, registrem seu interesse em um cachorro específico e realizem um cadastro para adoção. Além disso, funcionários cadastrados podem gerenciar informações de cães e adotantes interessados.

## Funcionalidades

- **Visualizar Cachorros Disponíveis**: Veja todos os cães disponíveis para adoção em diferentes locais do Brasil.
- **Cadastro de Interessados**: Permite que usuários interessados se cadastrem no site e selecionem o cachorro que desejam adotar.
- **Gestão de Funcionários**: Funcionários cadastrados podem acessar informações detalhadas sobre os cães e os adotantes interessados.

## Tecnologias Utilizadas

- **HTML, CSS, JavaScript e PHP**: Utilizados para construir a estrutura, o design e a funcionalidade do site.
- **Banco de Dados MySQL**: Utilizado para armazenar informações dos cachorros, adotantes e funcionários.
- **Bootstrap**: Framework CSS utilizado para criar partes da interface de forma responsiva e rápida.
- **XAMPP**: Ferramenta utilizada para simular um servidor local e permitir interações com o banco de dados.

## Estrutura do Banco de Dados

O banco de dados utilizado para este projeto se chama `DB_ANIMAL` e contém as seguintes tabelas:

- **tbl_login**: Armazena informações de login dos funcionários cadastrados no sistema. Esta tabela é utilizada para autenticação e controle de acesso dos usuários administrativos.

- **tbl_adotante**: Contém os dados dos adotantes interessados em adotar cachorros. Esta tabela inclui informações como CPF, nome, telefone, e-mail, endereço, entre outros dados relevantes para o processo de adoção.

- **mensagem**: Armazena as mensagens enviadas pelos usuários através do formulário de contato do site, incluindo o nome, e-mail, assunto e o texto da mensagem. Esta tabela é utilizada para gerenciar as comunicações recebidas dos visitantes.

- **tbl_pet**: Contém informações sobre os cachorros disponíveis para adoção, incluindo nome, idade, raça, porte, peso, endereço e uma breve descrição. Esta tabela é utilizada para exibir os detalhes dos animais no site e para gerenciar o processo de adoção.

## Pré-requisitos

Antes de começar, você precisará ter o seguinte software instalado:

- [XAMPP](https://www.apachefriends.org/index.html) - Versão 7.4 ou superior
- Navegador web atualizado (como Google Chrome, Firefox, etc.)

## Instalação

### 1. Instalação do XAMPP

1. Baixe o [XAMPP](https://www.apachefriends.org/index.html) do site oficial.
2. Siga o assistente de instalação para instalar o XAMPP no seu sistema.
3. Após a instalação, inicie o XAMPP Control Panel e inicie os serviços **Apache** e **MySQL**.

### 2. Configuração do Projeto

1. Clone este repositório ou baixe o código-fonte:

   ```bash
   git clone https://github.com/seuusuario/website-adocao-cachorros.git

2. Copie o código-fonte para a pasta htdocs do XAMPP. 
- **No Windows:**
    C:\xampp\htdocs\website-adocao-cachorros
- **Linux ou Mac:**
    /opt/lampp/htdocs/website-adocao-cachorros

3. Importe o banco de dados:
- Abra o phpMyAdmin em seu navegador.
- Crie um novo banco de dados chamado DB_ANIMAL.
- Importe o script SQL fornecido no diretório database do projeto para criar as tabelas necessárias.

