CREATE DATABASE locadora;
USE locadora;
CREATE TABLE veiculos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  modelo VARCHAR(100),
  marca VARCHAR(100),
  ano INT,
  disponivel BOOLEAN
);