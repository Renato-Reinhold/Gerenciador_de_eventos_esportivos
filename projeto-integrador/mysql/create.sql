create database administrador;

use administrador;

create table atletas(
	atl_id int primary key auto_increment,
    atl_nome varchar(300) not null,
    atl_data_nascimento date not null,
    atl_rg varchar(11) not null unique,
    atl_num_inscricao varchar(50) not null unique,
    atl_sexo char(1),
    atl_cidade int not null,
    atl_modalidade int not null
);
create table equipes(
	equ_id int primary key auto_increment,
    equ_nome varchar(300),
    equ_modalidade int not null
);

create table equipes_atletas(
	equ_atl_id int primary key auto_increment,
    equ_atl_equipe int not null,
    equ_atl_atleta int not null
);

create table equipes_dirigentes(
	equ_dir_id int primary key auto_increment,
    equ_dir_equipe int not null,
    equ_dir_dirigente int not null
);

create table eventos(
	eve_id int primary key auto_increment,
    eve_nome varchar(300),
    eve_local_torneios varchar(300),
    eve_data date not null
    
);

create table evento_torneios(
	
    eve_tor_id int primary key auto_increment,
    eve_tor_evento int,
    eve_tor_torneio int

);

create table torneios(
	tor_id int primary key auto_increment,
    tor_modalidade int
);

create table cidades(
	cid_id int primary key auto_increment,
    cid_codigo int not null,
    cid_nome varchar(300) not null
);

create table modalidades(

	mod_id int primary key auto_increment,
    mod_nome varchar(30),
    mod_tipo char(1)
    
);
create table dirigentes(

	dir_id int primary key auto_increment,
    dir_nome varchar(300),
    dir_funcao varchar(300),
    dir_data_nascimento date,
    dir_rg varchar(300) not null unique,
    dir_siagep varchar(300) not null unique
    
);

create table chaves(

	cha_id int primary key auto_increment,
    cha_torneio int
    
);

create table chave_equipes(
	
    cha_equ_id int primary key auto_increment,
    cha_equ_chave int,
    cha_equ_equipe int
    
);

create table usuario(

	usu_id int primary key auto_increment,
    usu_login varchar(50),
    usu_senha varchar(50)
    
);

create table estatisticas_equipe(

	est_equ_id int primary key auto_increment,
    est_equ_equipe int,
    est_equ_vitoria int,
    est_equ_derrota int,
    est_equ_empate int,
    est_equ_gols int,
    est_equ_evento int,
    est_equ_torneio int

);