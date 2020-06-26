document.getElementById('frmContato').addEventListener('submit', (event) => {
    var obj = {
        nome: getValue('txtNome'),
        email: getValue('txtEmail'),
        telefone: getValue('txtTelefone'),
        assunto: getValue('slAssunto'),
        mensagem: getValue('txtMensagem')
    };

    if (!validar(obj))
        event.preventDefault();
});

function validar(obj) {

    if (obj.nome.length < 2) {
        alert('Informe um nome maior que 2 caracteres!');
        return false;
    }

    if (obj.email.length < 6 || obj.email.indexOf('@') <= 0 || obj.email.indexOf('.') <= 0) {
        alert('Informe um email maior que 6 caracteres e válido!');
        return false;
    }

    if (obj.telefone.length > 11 || obj.telefone.length < 10) {
        alert('Informe um telefone válido (min. 10 caracteres, máx. 11 caracteres!)');
        return false;
    }

    if (obj.assunto.length < 1 || obj.assunto.length > 4) {
        alert('Selecione um assunto válido!');
        return false;
    }

    if (obj.mensagem.length < 5 || obj.mensagem.length > 500) {
        alert('Informe um assunto válido (min. 05 caracteres, máx. 500 caracteres!)');
        return false;
    }

    return true;
}

function getValue(element) {
    return document.getElementById(element).value;
}