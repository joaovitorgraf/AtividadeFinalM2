<?php
include 'db/config.php';

$sql = "SELECT * FROM tb_livros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  // Verifica se há registros retornados

    while ($row = $result->fetch_assoc()) {  // Loop através de cada registro retornado
        echo '<tr>';
        echo '<td>' . $row["id_livro"] . '</td>';
        echo '<td>' . $row["titulo"] . '</td>';
        echo '<td>' . $row["autor"] . '</td>';
        echo '<td>' . $row["genero"] . '</td>';
        echo '<td>' . $row["ano_publicacao"] . '</td>';
        echo '<td>' . $row["editora"] . '</td>';
        echo '<td>';
        echo '<a href="controllers/livros/update.php?id=' . $row["id_livro"] . '" class="btn btn-success">Editar</a>';  // Link para editar
        echo '<a href="controllers/livros/delete.php?id=' . $row["id_livro"] . '" class="btn btn-danger">Excluir</a>';    // Link para deletar
        echo '</td>';
        echo '</tr>';
    }
} else {
    echo "0 resultados";  // Exibe mensagem se não houver registros
}

$conn->close();  // Fecha a conexão com o banco de dados
