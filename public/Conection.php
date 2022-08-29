<?php

    //conexao com o banco de dados pg
    //     CREATE TABLE public.funcionario
    // (
    //     id serial PRIMARY KEY,
    //     nome character(50),
    //     cargo character(50),
    //     sobrenome character(100)
    // );

try {

    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=empresa;user=postgres;password=123');
    
} catch (PDOException $e) {
    var_dump($e->getMessage());
}