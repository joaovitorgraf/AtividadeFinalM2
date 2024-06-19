function validarFormulario() {
    // Limpar mensagens de erro e estilos
    limparErros();

    // Obter valores dos campos
    const titulo = document.getElementById('titulo').value.trim();
    const autor = document.getElementById('autor').value.trim();
    const genero = document.getElementById('genero').value.trim();
    const ano_publicacao = document.getElementById('anoPublicacao').value.trim();
    const editora = document.getElementById('editora').value.trim();

    let formValido = true;

    // Verificar se os campos estão preenchidos
    if (titulo === '') {
        mostrarErro('titulo', 'Título é obrigatório.');
        formValido = false;
    }

    if (autor === '') {
        mostrarErro('autor', 'Autor é obrigatório.');
        formValido = false;
    }

    if (genero === '') {
        mostrarErro('genero', 'Gênero é obrigatório.');
        formValido = false;
    }

    if (ano_publicacao === '') {
        mostrarErro('anoPublicacao', 'Ano de Publicação é obrigatório.');
        formValido = false;
    } else if (isNaN(ano_publicacao) || ano_publicacao < 0 || ano_publicacao > new Date().getFullYear()) {
        mostrarErro('anoPublicacao', 'Ano de Publicação inválido.');
        formValido = false;
    }

    if (editora === '') {
        mostrarErro('editora', 'Editora é obrigatória.');
        formValido = false;
    }

    return formValido;
}

function mostrarErro(campoId, mensagem) {
    const campo = document.getElementById(campoId);
    const erro = document.getElementById(campoId + 'Error');
    campo.classList.add('is-invalid');
    erro.textContent = mensagem;
    erro.classList.add('invalid-feedback');
}

function limparErros() {
    const campos = ['titulo', 'autor', 'genero', 'anoPublicacao', 'editora'];
    campos.forEach(campoId => {
        const campo = document.getElementById(campoId);
        const erro = document.getElementById(campoId + 'Error');
        campo.classList.remove('is-invalid');
        erro.textContent = '';
        erro.classList.remove('invalid-feedback');
    });
}
