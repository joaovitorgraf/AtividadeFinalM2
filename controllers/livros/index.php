<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP e MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Cadastrar Livro</h2>
        <form action="create.php" method="post">
            <div class="form-group">
                <label for="nome">Titulo</label>
                <input type="text" name="titulo" class="form-control" id="titulo" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Autor</label>
                <input type="text" name="autor" class="form-control" id="autor" required>
            </div>
            <div class="form-group">
                <label for="telefone">Genero</label>
                <input type="text" name="genero" class="form-control" id="genero" required>
            </div>
            <div class="form-group">
                <label for="telefone">Ano Publicação</label>
                <input type="text" name="ano_publicacao" class="form-control" id="ano_publicacao" required>
            </div>
            <div class="form-group">
                <label for="telefone">Editora</label>
                <input type="text" name="editora" class="form-control" id="editora" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

        <h2 class="mt-5">Livros Cadastradas</h2>
        <?php include __DIR__ . '/read.php'; ?>
    </div>
</body>

</html>