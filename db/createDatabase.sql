create database biblioteca
	character set utf8mb4
    collate utf8mb4_unicode_ci;
    
use biblioteca;

create table tb_livros(
	id_livro int auto_increment primary key,
    titulo varchar(100) not null,
    autor varchar(50) not null,
    genero varchar(50) not null,
    ano_publicacao varchar(4) not null,
    editor varchar(20) not null,
    created_at timestamp default current_timestamp,
    update_at datetime default current_timestamp on update current_timestamp
);

create table tb_usuarios(
	id_usuario int auto_increment primary key,
    nome varchar(50) not null,
    e_mail varchar(50) not null,
	telefone varchar(15) not null,
    endereco varchar(50) not null,
    created_at timestamp default current_timestamp,
    update_at datetime default current_timestamp on update current_timestamp
);