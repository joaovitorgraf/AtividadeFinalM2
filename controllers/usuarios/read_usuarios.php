<?php
include 'db/config.php';

$sql = "SELECT * FROM tb_usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  // Verifica se há registros retornados
    while ($row = $result->fetch_assoc()) {  // Loop através de cada registro retornado
        echo '<tr>';
        echo '<td>' . $row["id_usuario"] . '</td>';
        echo '<td>' . $row["nome"] . '</td>';
        echo '<td>' . $row["e_mail"] . '</td>';
        echo '<td>' . $row["telefone"] . '</td>';
        echo '<td>' . $row["endereco"] . '</td>';
        echo '<td>';
        echo '<a href="controllers/usuarios/update_usuario.php?id=' . $row["id_usuario"] . '" class="btn btn-success">Editar</a> ';  // Link para editar
        echo '<a href="controllers/usuarios/delete_usuarios.php?id=' . $row["id_usuario"] . '" class="btn btn-danger">Excluir</a>';    // Link para deletar
        echo '</td>';
        echo '</tr>';
    }
} else {
    echo "0 resultados";  // Exibe mensagem se não houver registros
}

$conn->close();  // Fecha a conexão com o banco de dados
