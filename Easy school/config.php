<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'easy-school';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if ($conexao->connect_errno) {
    //     echo "Erro";
    // }
    // else {
    //     echo "conexão efectuada com sucesso";
    // }

?>