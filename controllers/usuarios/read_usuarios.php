<?php
include '../../db/config.php';

$sql = "SELECT * FROM tb_usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  // Verifica se há registros retornados
    echo '<table class="table table-bordered">';
    echo '<tr><th>Nome</th><th>E-mail</th><th>Telefone</th><th>Endereço</th><th>Ação</th></tr>';
    while ($row = $result->fetch_assoc()) {  // Loop através de cada registro retornado
        echo '<tr>';
        echo '<td>' . $row["nome"] . '</td>';
        echo '<td>' . $row["e_mail"] . '</td>';
        echo '<td>' . $row["telefone"] . '</td>';
        echo '<td>' . $row["endereco"] . '</td>';
        echo '<td>';
        echo '<a href="update_usuario.php?id=' . $row["id_usuario"] . '" class="btn btn-success">Editar</a> ';  // Link para editar
        echo '<a href="delete_usuarios.php?id=' . $row["id_usuario"] . '" class="btn btn-danger">Excluir</a>';    // Link para deletar
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "0 resultados";  // Exibe mensagem se não houver registros
}

$conn->close();  // Fecha a conexão com o banco de dados
