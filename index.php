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
                <form action="controllers/livros/read_busca.php" method="post" class="d-flex mt-5" role="search">
                    <select class="custom-select mr-sm-2" name="select" required>
                        <option value="" disabled selected>Selecione...</option>
                        <option value="id_livro">ID</option>
                        <option value="titulo">Título</option>
                        <option value="genero">Gênero</option>
                        <option value="ano_publicacao">Ano de Publicação</option>
                        <option value="editora">Editora</option>
                    </select>
                    <input class="form-control me-2 w-5" type="search" name="buscar" placeholder="Buscar" aria-label="Buscar" required>
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <div class="my-3">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Adicionar Livro
                    </button>

                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Gênero</th>
                            <th>Ano de Publicação</th>
                            <th>Editora</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody id="livroTableBody">
                        <?php include __DIR__ . '/controllers/livros/read.php'; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="usuarioModalLabel">Adicionar Livro</h5>
                </div>
                <div class="modal-body">
                    <form action="controllers/livros/create.php" method="post" id="usuarioForm" onsubmit="return validarFormulario()">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" required>
                            <span id="tituloError"></span>
                        </div>
                        <div class="form-group">
                            <label for="autor">Autor</label>
                            <input type="text" name="autor" class="form-control" id="autor" required>
                            <span id="autorError"></span>
                        </div>
                        <div class="form-group">
                            <label for="genero">Genero</label>
                            <input type="text" name="genero" class="form-control" id="genero" required>
                            <span id="generoError"></span>
                        </div>
                        <div class="form-group">
                            <label for="ano_publicacao">Ano de Publicação</label>
                            <input type="text" name="ano_publicacao" class="form-control" id="ano_publicacao" required>
                            <span id="ano_publicacaoError"></span>
                        </div>
                        <div class="form-group">
                            <label for="editora">Editora</label>
                            <input type="text" name="editora" class="form-control" id="editora" required>
                            <span id="editoraError"></span>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="usuarioModalLabel">Editar Livro</h5>
                </div>
                <div class="modal-body">
                    <form action="controllers/livros/create.php" method="post" id="usuarioForm" onsubmit="return validarFormulario()">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" required>
                            <span id="tituloError"></span>
                        </div>
                        <div class="form-group">
                            <label for="autor">Autor</label>
                            <input type="text" name="autor" class="form-control" id="autor" required>
                            <span id="autorError"></span>
                        </div>
                        <div class="form-group">
                            <label for="genero">Genero</label>
                            <input type="text" name="genero" class="form-control" id="genero" required>
                            <span id="generoError"></span>
                        </div>
                        <div class="form-group">
                            <label for="ano_publicacao">Ano de Publicação</label>
                            <input type="text" name="ano_publicacao" class="form-control" id="ano_publicacao" required>
                            <span id="ano_publicacaoError"></span>
                        </div>
                        <div class="form-group">
                            <label for="editora">Editora</label>
                            <input type="text" name="editora" class="form-control" id="editora" required>
                            <span id="editoraError"></span>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>