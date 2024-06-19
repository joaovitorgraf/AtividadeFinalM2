<?php
include '../../db/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_usuarios WHERE id_usuario=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc(); //obtem os dados do registro
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Atualizar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h2 class="mt-5">Atualizar Usuario</h2>
        <!-- Formulário para atualizar a pessoa -->
        <form action="update_process_usuario.php" method="post">
            <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']; ?>"> <!-- Campo oculto com o ID -->
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $row['nome']; ?>" required> <!-- Campo para o nome -->
            </div>
            <div class="form-group">
                <label for="sobrenome">E-mail</label>
                <input type="text" name="e_mail" class="form-control" id="e_mail" value="<?php echo $row['e_mail']; ?>" required> <!-- Campo para o sobrenome -->
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" value="<?php echo $row['telefone']; ?>" required> <!-- Campo para o telefone -->
            </div>
            <div class="form-group">
                <label for="telefone">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="endereco" value="<?php echo $row['endereco']; ?>" required> <!-- Campo para o telefone -->
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button> <!-- Botão para enviar o formulário -->
        </form>
    </div>
</body>

</html>