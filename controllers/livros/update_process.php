<?php
include '../../db/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id_livro"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $genero = $_POST["genero"];
    $ano_publicacao = $_POST["ano_publicacao"];
    $editora = $_POST["editora"];

    // Atualiza os dados na tabela pessoas
    $sql = "UPDATE tb_livros SET titulo='$titulo', autor='$autor', genero='$genero', ano_publicacao='$ano_publicacao', editora='$editora' WHERE id_livro=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../index.php");  // Redireciona para a página principal se a atualização for bem-sucedida
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;  // Exibe um erro se a atualização falhar
    }
}

$conn->close();  // Fecha a conexão com o banco de dados
