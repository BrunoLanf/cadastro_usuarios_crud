<?php 

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-crud';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro errado deu arradooooooo";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>