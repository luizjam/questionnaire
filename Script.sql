-- criar base de dados
create database db_questionnaire default character set utf8 collate utf8_general_ci;

-- utilizar a base de dados criada
Use db_questionnaire;

-- criar tabela Empresa
create table tb_empresas(
cd_empresa int unsigned not null default null auto_increment primary key,
nm_empresa varchar(100) not null,
ds_cnpj char(14) not null,
ds_logradouro varchar(100) not null,
ds_bairro varchar(50) not null,
ds_cidade varchar(50) not null,
sg_uf char(2) not null,
ds_cep char(8) not null,
ds_fone varchar(13) null)
engine = innodb character set utf8 collate utf8_general_ci;

-- criar a tabela grupos para utilizar o ACL
create table groups(
id int unsigned not null auto_increment primary key,
name varchar(50) not null,
created datetime,
modified datetime)
engine = innodb character set utf8 collate utf8_general_ci;

-- criar a tabela user para o utilizar o ACL
create table users(
id int unsigned not null auto_increment primary key,
username varchar(50) not null unique,
password char(20) not null,
group_id int unsigned not null,
created datetime,
modified datetime,
constraint fk_grouse foreign key(group_id) references groups(id))
engine = innodb character set utf8 collate utf8_general_ci;

-- criar tabela representantes
create table tb_representantes(
cd_representante int unsigned not null default null auto_increment primary key,
nm_representante varchar(100) not null,
ds_cpf char(11) not null,
ds_email varchar(100) not null,
ds_fone char(13) not null,
ds_celular char(14) not null,
cd_empresa int unsigned null,
user_id int unsigned null,
constraint fk_emprep foreign key(cd_empresa) references tb_empresas(cd_empresa))
engine = innodb character set utf8 collate utf8_general_ci;

-- alterar a tabela representantes para adicionar a chave estrangeira
-- alter table tb_representantes add constraint 'fk_empresa' foreign key (cd_empresa) 
-- references tb_empresas(cd_empresa);

-- criar tabela questionamentos
create table tb_perguntas(
cd_pergunta int unsigned not null auto_increment primary key,
ds_titulo varchar(100) not null,
ds_conteudo text not null,
ic_prioridade enum('B', 'M', 'A') default 'B', -- (B)aixa, (M)édia, (A)lta
ic_categoria enum('F', 'L', 'T') default null, -- (F)inanceiro, (L)egislação, (T)écnico
ic_status tinyint not null default 0, -- 0 - não visualizado, 1 - lido, 2 - em análise, 3 - respondido
ic_alteraEdital bool default 0, -- 0 - não, 1 - sim
ds_observacao varchar(255) null,
ds_expediente char(10) null,
dt_expediente datetime default null,
ds_palavraChave varchar(30) not null)
engine = innodb character set UTF8 collate utf8_general_ci;

-- criar a tablela de grupamento das perguntas x empresas
create table tb_grupamentos(
cd_grupamento int unsigned not null auto_increment primary key,
cd_empresa int not null,
cd_pergunta int not null,
key fk_emp(cd_empresa),
key fk_per(cd_pergunta))
engine = innodb character set UTF8 collate utf8_general_ci;

-- descrever tabela representantes
describe tb_representantes;

-- alterar o tamanho das colunas ds_fone e ds_celular
ALTER TABLE  tb_representantes CHANGE  ds_celular  ds_celular VARCHAR(17) 
CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL

-- alterar a tb_representante cd_empresa de not null p/ null
alter table tb_representantes modify cd_empresa int unsigned null;

-- alterar a tb_representantes incluir user_id depois de cd_empresa
alter table tb_representantes add user_id int unsigned null
after cd_empresa;

-- criar a tabela de editais da companhia
create table tb_editais(
cd_edital int unsigned not null auto_increment primary key,
nm_edital varchar(100) not null,
cd_processo int null unique,
dt_publicacao date not null,
dt_iniciovisita datetime null,
dt_fimvisita datetime null)
engine = innodb character set UTF8 collate utf8_general_ci;

-- criar a tabela de resolução entre tb_empresas e tb_editais
create table tb_licitantes(
cd_licitante int unsigned not null auto_increment primary key,
cd_empresa int unsigned not null,
cd_edital int unsigned not null,
constraint fk_emplic foreign key(cd_empresa) references tb_empresas(cd_empresa),
constraint fk_edilic foreign key(cd_edital) references tb_editais(cd_edital))
engine = innodb character set utf8 collate utf8_general_ci;


show tables;