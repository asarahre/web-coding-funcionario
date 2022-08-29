<?php
require 'Conection.php';
//verificamos qual o metodo de requisição
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //caso seja igual a POST recuramos a variavel
    //pesquisa.
    $pesquisa = filter_input(
        INPUT_POST,
        'pesquisa',
        FILTER_UNSAFE_RAW
    );
    if (
        !empty($pesquisa)
    ) {
        $sql = "select * FROM funcionario
        where 
        nome like '%$pesquisa%' or 
        sobrenome like '%$pesquisa%' or
        cargo like '%$pesquisa%'";

        $dados = $pdo->query($sql);

        $funcionarios = $dados->fetchAll(PDO::FETCH_OBJ);
        
        foreach ($funcionarios as $key => $value) {
            echo "<tr><td>$value->id</td>" .
                "<td>$value->nome</td>" .
                "<td>$value->sobrenome</td>" .
                "<td>$value->cargo</td></tr>";
        }
    } else {
        echo "Por favor informe o que deseja pesquisa";
    }
}