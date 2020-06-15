create database if not exists CADASTRO
default character set utf8
default collate utf8_general_ci;

create table if not exists USUARIOS (
codigo int not null auto_increment,
nome varchar(40) not null,
email varchar(50) not null unique,
profissao varchar(401) not null,
primary key(codigo)
) default charset=utf8;

