<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP e MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Cadastrar Usuarios</h2>
        <form action="create_usuarios.php" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">E-mail</label>
                <input type="text" name="e_mail" class="form-control" id="e_mail" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" required>
            </div>
            <div class="form-group">
                <label for="telefone">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="endereco" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

        <h2 class="mt-5">Usuarios Cadastrados</h2>
        <?php include __DIR__ . '/read_usuarios.php'; ?>
    </div>
</body>

</html>