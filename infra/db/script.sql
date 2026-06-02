-- Criei o banco de dados
CREATE DATABASE sistema_simples_m1;

USE sistema_simples_m1;
-- Colocando as colunas para login
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(87) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
-- Aqui estamos atribuindo valor
INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');