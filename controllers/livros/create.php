<?php
include '../../db/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $genero = $_POST["genero"];
    $ano_publicacao = $_POST["ano_publicacao"];
    $editora = $_POST["editora"];

    // inserindo na tabela
    $sql = "INSERT INTO tb_livros (titulo, autor, genero, ano_publicacao, editora)
    VALUES ('$titulo', '$autor', '$genero', '$ano_publicacao', '$editora')";

    if ($conn->query($sql) === true) {
        header("Location: index.php"); //redireciona para a o index se der tudo certo
        exit();
    } else {
        echo "Erro: " . $sql . "<br>"; //retorna erro
    }
}

$conn->close();
