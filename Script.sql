-- criar base de dados
create database db_questionnaire default character set utf8 collate utf8_general_ci;

-- utilizar a base de dados criada
Use db_questionnaire;

-- criar tabela Empresa
create table tb_empresas(
cd_empresa int unsigned not null auto_increment primary key,
nm_empresa varchar(100) not null,
ds_cnpj char(14) not null,
ds_logradouro varchar(100) not null,
ds_bairro varchar(50) not null,
ds_cidade varchar(50) not null,
sg_uf char(2) not null,
ds_cep char(8) not null,
ds_fone varchar(13) null)
engine = innodb character set utf8 collate utf8_general_ci;

-- criar tabela representantes
create table tb_representantes(
cd_representante int unsigned not null auto_increment primary key,
nm_representante varchar(100) not null,
ds_cpf char(11) not null,
ds_email varchar(100) not null,
ds_fone char(13) not null,
ds_celular char(14) not null,
cd_empresa int unsigned not null)
engine = innodb character set utf8 collate utf8_general_ci;

-- criar tabela questionamentos
create table tb_questionamentos(
cd_questionamento int unsigned not null auto_increment primary key,
ds_titulo varchar(100) not null,
ds_conteudo text not null,
vl_prioridade enum("B", "M", "A") default "B",

FALTA TERMINAR