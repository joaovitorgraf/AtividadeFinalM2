const formUsu = document.querySelector('#form_usu');

const btnSalvarUsu = document.getElementById('btnSalvarUsu');
btnSalvarUsu.addEventListener('click', async (event) => {
    event.preventDefault();

    const nome = document.getElementById('nome');
    const email = document.getElementById('e_mail');
    const telefone = document.getElementById('telefone');
    const endereco = document.getElementById('endereco');

    if (nome.value === '') {
        alert('Nome não informado!');
        nome.focus();
    } else if (email.value === '') {
        alert('Email não informado!');
        email.focus();
    } else if (telefone.value === '') {
        alert('Telefone não informado!');
        telefone.focus();
    } else if (endereco.value === '') {
        alert('Endereço não informado!');
        endereco.focus();
    } else {
        const dadosForm = new FormData(formUsu);
        const dados = await fetch('controllers/usuarios/create_usuarios.php', {
            method: 'POST',
            body: dadosForm,
        });
        window.location.reload();
    }
});
