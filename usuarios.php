<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LibraryApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LibraryApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuarios.php">Usuarios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="tab-content" id="myTabContent">
            <!-- Livros Tab -->
            <div class="tab-pane fade show active" id="livros" role="tabpanel" aria-labelledby="livros-tab">
                <form action="controllers/usuarios/read_busca.php" method="post" class="d-flex mt-5" role="search">
                    <select class="custom-select mr-sm-2" name="select" required>
                        <option value="" disabled selected>Selecione...</option>
                        <option value="id_usuario">ID</option>
                        <option value="nome">Nome</option>
                        <option value="e_mail">Email</option>
                        <option value="telefone">Telefone</option>
                        <option value="endereco">Endereço</option>
                    </select>
                    <input class="form-control me-2 w-5" type="search" name="buscar" placeholder="Buscar" aria-label="Buscar" required>
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <div class="my-3">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Adicionar Usuario
                    </button>

                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="usuTableBody">
                        <?php include __DIR__ . '/controllers/usuarios/read_usuarios.php'; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="usuarioModalLabel">Adicionar Usuário</h5>
                    </div>
                    <div class="modal-body">
                        <form id="form_usu">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" class="form-control" id="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="e_mail">E-mail</label>
                                <input type="email" name="e_mail" class="form-control" id="e_mail" required>
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" class="form-control" id="telefone" required>
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" name="endereco" class="form-control" id="endereco" required>
                            </div>
                            <a id="btnSalvarUsu" class="btn btn-primary mt-4">Salvar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript" src="./scriptUsu.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>