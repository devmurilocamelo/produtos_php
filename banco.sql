CREATE DATABASE IF NOT EXISTS papelaria CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE papelaria;

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);

INSERT INTO produtos (id, nome, preco) VALUES
(1, 'Caderno', 15.90),
(2, 'Lapiseira', 8.50),
(3, 'Borracha', 2.00),
(4, 'Estojo', 12.00),
(5, 'Cola', 6.90);
