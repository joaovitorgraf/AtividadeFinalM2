<?php
include '../../db/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id_usuario"];
    $nome = $_POST["nome"];
    $e_mail = $_POST["e_mail"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];


    // Atualiza os dados na tabela pessoas
    $sql = "UPDATE tb_usuarios SET nome='$nome', e_mail='$e_mail', telefone='$telefone', endereco='$endereco' WHERE id_usuario=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");  // Redireciona para a página principal se a atualização for bem-sucedida
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;  // Exibe um erro se a atualização falhar
    }
}

$conn->close();  // Fecha a conexão com o banco de dados
