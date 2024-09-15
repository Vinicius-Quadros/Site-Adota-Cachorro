create database DB_ANIMAL;

use DB_ANIMAL;

create table if not exists tbl_login(
cod_usuario int(4) not null auto_increment,
id_usuario varchar(15),
senha_usuario varchar(8),
primary key (cod_usuario)
);

create table if not exists tbl_adotante(
cpf_adotante char(11) not null unique,
nome_adotante varchar (100),
telefone_adotante int(12),
email_adotante varchar(100),
nascimento_adotante varchar(11),
sexo_adotante varchar (11),
cep_adotante varchar(11),
descr_logr_adotante varchar(100),
num_logr_adotante int(5),
descr_complem_adotante varchar (100),
descr_bairro_adotante varchar(100),
descr_cidade_adotante varchar(100),
UF_adotante varchar(2),
primary key (cpf_adotante),
key adotante (nome_adotante) using btree
);

CREATE TABLE mensagem (
nome varchar (50),
email varchar (25),
assunto varchar (25),
texto varchar (100)
);

create table if not exists tbl_pet(
cod_pet int(4) not null auto_increment,
nome_pet varchar(40),
idade_pet int(2),
raca_pet varchar(20),
porte_pet varchar(20),
peso_pet int(3),
endereco varchar(50),
sobre varchar(100),
primary key(cod_pet),
key pet (nome_pet) using btree
);

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('Adalberto','1','SRD pelo curto','Medio','12','Petz Jaguaré, SAO PAULO, SP','Adalberto e brincalhao, carinhoso e docil');

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('Almofadinhas','1','SRD pelo medio','Medio','8','Petz Foz do Iguacu, FOZ DO IGUACU, PR','Sou um mocinho porte bem pequeno, ideal para ser criado dentro de casa  ou apartamento! Sou muito dócil e carinhoso. Faz meses que estou aguardando a minha nova família, me ajude a não perder as esperanças!');

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('Amora','0.9','SRD pelo curto','Medio','6','Petz Gama Leste, BRASILIA, DF','Amora foi adotado com poucos meses de vida com sua irmão Pepy.Seis meses depois foram devolvidos. Muitos são adotados por impulso e depois que crescem  voltam para o abrigo. Se tornaram inseparaveis.');

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('Calabresa','0.3','pinscher pelo curto','Pequeno','3','Petz Taboão da Serra, SAO PAULO, SP','Calabresa foi resgatada juntos com os irmãozinhos perto de uma pizzaria e todos receberam nomes de recheios de pizza, ela é docil, gosta de brincar e muito carinhosa.');

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('Charlie','3','SRD pelo curto','Medio','7','Petz Litoral Plaza, PRAIA GRANDE, SP','PAREÇO UM CARAMELO!');

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('Camomila','0.3','buldog frances pelo curto','Pequeno','1.5','Petz Giovanni Pirelli, SANTO ANDRE, SP','Encontrada com as irmas, extremamente manda e brincalhona, merece um lar com amor!');

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('Hellen','2','SRD pelo curto','Medio','7','Petz Dom Pedro, CAMPINAS, SP','docil');

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('Dimmy','1.6','SRD pelo curto','Medio','8','Petz Continente, SAO JOSE, SC','Dimmy um caramelinho lindo , perninhas curtas e um grande carinho pelos humanos que cuidam dele. quer cuidar do Dimmy? Adote ele.');

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('Floriano','3','SRD pelo longo','Medio','12','Petz Betim, BETIM, MG','Lindo cão de porte médio, obediente e amoroso.');

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('KLOE','0.7','SRD pelo curto','Medio','12','Petz Cotia, COTIA, SP','Olá, sou a Kloe, mais conhecida como Pulga, porque cheguei pequenina e bastante agitada. Sou muito carinhosa, dócil, porte médio e me dou bem com outros pets. Me adota?');

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('Duque','1','SRD pelo curto','Pequeno','6.5','Petz Plaza Avenida Shopping, SAO JOSE DO RIO PRETO, SP','DUQUE é um cãozinho muito amoroso de porte 
médio/pequeno. Castrado e vacinado. Adote o Duque.');

INSERT INTO `tbl_pet`( `nome_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `peso_pet`, `endereco`, `sobre`) VALUES ('Duque','1.3','Pastor Almão pelo longo','Grande','9','Petz Dom Pedro, CAMPINAS, SP','muito brincalhona e dócil');




