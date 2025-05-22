-- Criação do banco e tabela
CREATE DATABASE locadora;
USE locadora;

-- Criação da tabela de veículos
CREATE TABLE veiculos (
    id INT AUTO_INCREMENT PRIMARY KEY, -- ID único
    modelo VARCHAR(100),               -- Modelo do carro
    marca VARCHAR(100),                -- Marca
    ano INT,                           -- Ano
    disponivel BOOLEAN                 -- Se está disponível (1 ou 0)
);