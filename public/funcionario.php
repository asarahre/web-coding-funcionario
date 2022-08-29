<?php
require "Conection.php";

$dados = $pdo->query("select * from funcionario;");

$clientes = $dados->fetchAll(PDO::FETCH_OBJ);

foreach ($clientes as $key => $value) {

    echo "<tr><td>$value->id</td>" .
        "<td>$value->nome</td>" .
        "<td>$value->sobrenome</td>" .
        "<td>$value->cargo</td></tr>";
}