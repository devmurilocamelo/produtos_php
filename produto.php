<?php

    $conexao = new mysqli("localhost", "root", "", "Papelaria");
    $metodo = $_SERVER["REQUEST_METHOD"];

    if ($metodo === "OPTIONS") {

        echo "Aceito: GET, POST, PUT PATCH, DELETE, OPTIONS\n";
        
    }

     if ($metodo === "GET") {
        
    }


    if ($metodo === "POST") {

        $conexao->query("INSERT INTO produtos (nome_produto, preco_produto) VALUES ('Estojo', 9.50)");
        
    }

    if ($metodo === "PUT") {

        $conexao->query("UPDATE produtos SET nome_produto = 'Mochila', preco_produto = 89.90 WHERE id_produto = 5");
        
    }

    if ($metodo === "PATCH") {

        $conexao->query("UPDATE produtos SET preco_produto = 3.00 WHERE id_produto = 5");
        
    }

    if ($metodo === "DELETE") {

        $conexao->query("DELETE FROM produtos WHERE id_produto = 3");
        
    }

    echo "Método: " . $metodo . "\n";

    $r = $conexao->query("SELECT * FROM papelaria.produtos");
    while ($linha = $r->fetch_assoc()) {

    echo $linha["id_produto"] . " - " . $linha["nome_produto"] . " - " . $linha ["preco_produto"] . "\n";
    }


?>

