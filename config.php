<?php 

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-trab';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //Verificar a conexao com o banco de dados:
    // if($conexao->connect_errno)
    // {
    //     echo "Erro errado deu errado";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>