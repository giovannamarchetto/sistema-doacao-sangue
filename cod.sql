CREATE DATABASE doacoes;
USE doacoes;

CREATE TABLE doadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    cpf VARCHAR(14) UNIQUE,
    tipo_sanguineo VARCHAR(5)
);
