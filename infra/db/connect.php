<?php

    // Aqui atribuímos variáveis
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples_m1";

    // conn serve para conectar todas as variáveis com o mysql
    $conn = new mysqli($host,$user,$pass,$db);

    // Caso houver erro de conexão ele mostra que está tendo erro de conexão
    if($conn->connect_error){
        die("Erro na conexão!");
    }else{
    // Ele mostra que o banco foi conectado com sucesso
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

?>