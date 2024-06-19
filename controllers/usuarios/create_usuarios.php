<?php
include '../../db/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $e_mail = $_POST["e_mail"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    // inserindo na tabela
    $sql = "INSERT INTO tb_usuarios (nome, e_mail, telefone, endereco)
    VALUES ('$nome', '$e_mail', '$telefone', '$endereco')";

    if ($conn->query($sql) === true) {
        header("Location: ../../usuarios.php"); //redireciona para a o index se der tudo certo
        exit();
    } else {
        echo "Erro: " . $sql . "<br>"; //retorna erro
    }
}

$conn->close();
