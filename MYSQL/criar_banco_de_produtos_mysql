CREATE DATABASE IF NOT EXISTS gestao_produtos;
use gestao_produtos;

CREATE TABLE IF NOT EXISTS produtos(

id int AUTO_INCREMENT PRIMARY KEY,
nome varchar(30),
sku bigint unique,
descricao text,
categoria varchar(40),
preco decimal(10,2),
unidade_medida varchar(5),
peso decimal(6,2),
quantidade_estoque bigint(200),
fabricante varchar(70),
fornecedor varchar(70),
updated_at timestamp default current_timestamp,
deleted_at timestamp default NULL,
created_at timestamp default current_timestamp
);


SELECT * FROM produtos ;


CREATE TABLE IF NOT EXISTS categorias (

id int AUTO_INCREMENT PRIMARY KEY,
nome_categoria varchar(15),
updated_at timestamp default current_timestamp,
deleted_at timestamp default NULL,
created_at timestamp default current_timestamp

);


CREATE TABLE IF NOT EXISTS unidade_medida (

id int AUTO_INCREMENT PRIMARY KEY,
nome_unidade_medida varchar(15),
updated_at timestamp default current_timestamp,
deleted_at timestamp default NULL,
created_at timestamp default current_timestamp

);



CREATE TABLE IF NOT EXISTS fabricantes (

id int AUTO_INCREMENT PRIMARY KEY,
nome_fabricante varchar(15),
updated_at timestamp default current_timestamp,
deleted_at timestamp default NULL,
created_at timestamp default current_timestamp

);



CREATE TABLE IF NOT EXISTS fornecedores (

id int AUTO_INCREMENT PRIMARY KEY,
nome_fornecedor varchar(15),
updated_at timestamp default current_timestamp,
deleted_at timestamp default NULL,
created_at timestamp default current_timestamp

);