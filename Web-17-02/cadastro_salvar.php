<?php
include("./database/connection.php");
include("./Pessoa.php");


if ($_POST) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $query = "INSERT INTO contatos (nome, email, fone) VALUES (:r_nome, :r_email, :r_telefone)";

    $insert = $connection->prepare($query);
    $insert->bindParam(":r_nome", $nome);
    $insert->bindParam(":r_email", $email);
    $insert->bindParam(":r_telefone", $telefone);

    $result = $insert->execute();

    if ($result && $insert->rowCount()) {
        echo "O contato <b>{$nome}</b> foi salvo com sucesso!";
    } else {
        echo "Houve erro ao salvar o contato. Contate o administrador do software!";
    }
} else {
    header("location: ./cadastro.php");
}
