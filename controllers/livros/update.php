<?php
include '../../db/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_livros WHERE id_livro=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc(); //obtem os dados do registro
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Atualizar Livro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Atualizar Livro</h2>
        <!-- Formulário para atualizar a pessoa -->
        <form action="update_process.php" method="post">
            <input type="hidden" name="id_livro" value="<?php echo $row['id_livro']; ?>"> <!-- Campo oculto com o ID -->
            <div class="form-group">
                <label for="nome">Titulo</label>
                <input type="text" name="titulo" class="form-control" id="titulo" value="<?php echo $row['titulo']; ?>" required> <!-- Campo para o nome -->
            </div>
            <div class="form-group">
                <label for="sobrenome">Autor</label>
                <input type="text" name="autor" class="form-control" id="autor" value="<?php echo $row['autor']; ?>" required> <!-- Campo para o sobrenome -->
            </div>
            <div class="form-group">
                <label for="telefone">Genero</label>
                <input type="text" name="genero" class="form-control" id="genero" value="<?php echo $row['genero']; ?>" required> <!-- Campo para o telefone -->
            </div>
            <div class="form-group">
                <label for="telefone">Ano Publicação</label>
                <input type="text" name="ano_publicacao" class="form-control" id="ano_publicacao" value="<?php echo $row['ano_publicacao']; ?>" required> <!-- Campo para o telefone -->
            </div>
            <div class="form-group">
                <label for="telefone">Editora</label>
                <input type="text" name="editora" class="form-control" id="editora" value="<?php echo $row['editora']; ?>" required> <!-- Campo para o telefone -->
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button> <!-- Botão para enviar o formulário -->
        </form>
    </div>
</body>

</html>