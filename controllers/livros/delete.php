<?php
include '../../db/config.php';

if (isset($_GET['id'])) {  // Verifica se o ID foi passado como parâmetro
    $id = $_GET['id'];

    // Deleta o registro da tabela pessoas
    $sql = "DELETE FROM tb_livros WHERE id_livro=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../index.php");  // Redireciona para a página principal se a exclusão for bem-sucedida
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;  // Exibe um erro se a exclusão falhar
    }
}

$conn->close();  // Fecha a conexão com o banco de dados
