<?php
include '../../db/config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); //recebe os dados enviados do JS

if (!empty($dados)) {
    $nome = $dados["nome"];
    $email = $dados["e_mail"];
    $telefone = $dados["telefone"];
    $endereco = $dados["endereco"];
    // inserindo na tabela
    $sql = "INSERT INTO tb_usuarios (nome, e_mail, telefone, endereco)
    VALUES ('$nome', '$email', '$telefone', '$endereco')";

    if ($conn->query($sql) === true) {
        header("Location: ../../usuarios.php"); //redireciona para a o index se der tudo certo
        exit();
    } else {
        echo "Erro: " . $sql . "<br>"; //retorna erro
    }
}

$conn->close();
