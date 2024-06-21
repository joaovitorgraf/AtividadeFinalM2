<?php
include '../../db/config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); //recebe os dados enviados do JS

if (!empty($dados)) {
    $titulo = $dados["titulo"];
    $autor = $dados["autor"];
    $genero = $dados["genero"];
    $ano_publicacao = $dados["ano_publicacao"];
    $editora = $dados["editora"];

    // inserindo na tabela
    $sql = "INSERT INTO tb_livros (titulo, autor, genero, ano_publicacao, editora)
    VALUES ('$titulo', '$autor', '$genero', '$ano_publicacao', '$editora')";

    if ($conn->query($sql) === true) {
        header("Location: ../../index.php"); //redireciona para a o index se der tudo certo
        exit();
    } else {
        echo "Erro: " . $sql . "<br>"; //retorna erro
    }
}

$conn->close();
