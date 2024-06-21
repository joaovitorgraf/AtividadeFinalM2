const form = document.querySelector('#cad_livro');

const btnSalvar = document.getElementById('btnSalvar');
btnSalvar.addEventListener('click', async (event) => {
    event.preventDefault();

    const titulo = document.getElementById('titulo');
    const autor = document.getElementById('autor');
    const genero = document.getElementById('genero');
    const ano_publicacao = document.getElementById('ano_publicacao');
    const editora = document.getElementById('editora');

    if (titulo.value === '') {
        alert('Titulo não informado!');
        titulo.focus();
    } else if (autor.value === '') {
        alert('Autor não informado!');
        autor.focus();
    } else if (genero.value === '') {
        alert('Gênero não informado!');
        genero.focus();
    } else if (ano_publicacao.value === '') {
        alert('Ano de publicação não informado!');
        ano_publicacao.focus();
    } else if (editora.value === '') {
        alert('Editora não informada!');
        editora.focus();
    } else {
        const dadosForm = new FormData(form);
        const dados = await fetch('./controllers/livros/create.php', {
            method: 'POST',
            body: dadosForm,
        });
        window.location.reload();
    }
});
