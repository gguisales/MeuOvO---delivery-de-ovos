CREATE DATABASE meusovo;
USE meusovo;

CREATE TABLE usuario(
    nome_usuario CHAR PRIMARY KEY NOT NULL,
    nome VARCHAR(60),
    dt_nascimento DATE,
    email VARCHAR(90),
    senha CHAR(20)
);