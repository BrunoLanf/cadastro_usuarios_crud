<?php

require_once("config.php");
$con = mysqli_connect("localhost", "root", "", "formulario-trab");

$acao = $_REQUEST["acao"];
$return = array();

if ($acao === "carregar") {
    $query = "SELECT id, nome, email, telefone, sexo, data_nasc, cidade, estado, endereco FROM usuarios";

    $consulta = mysqli_query($con, $query);

    // Verificar se a consulta foi bem-sucedida
    if ($consulta) {
        while ($data = mysqli_fetch_assoc($consulta)) {
            $return[] = array(
                "id" => $data["id"],
                "nome" => $data["nome"],
                "email" => $data["email"],
                "telefone" => $data["telefone"],
                "sexo" => $data["sexo"],
                "data_nasc" => $data["data_nasc"],
                "cidade" => $data["cidade"],
                "estado" => $data["estado"],
                "endereco" => $data["endereco"]
            );
        }

        die(json_encode($return));
    } else {
        // Se a consulta falhou, imprimir mensagem de erro
        die("Erro na consulta: " . mysqli_error($con));
    }
}

?>
