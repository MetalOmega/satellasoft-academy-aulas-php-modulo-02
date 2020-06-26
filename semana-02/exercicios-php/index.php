<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metal Omega</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/unsemantic.css">
</head>

<body>

    <div class="max-width">
        <h1>Contato</h1>

        <form action="contato.php" method="post" id="frmContato">
            <!--ROW-->
            <div class="grid-50 mobile-grid-100">
                <label for="txtNome">Nome</label>
                <input type="text" id="txtNome" name="txtNome">
            </div>

            <div class="grid-50 mobile-grid-100">
                <label for="txtEmail">E-mail</label>
                <input type="email" id="txtEmail" name="txtEmail">
            </div>

            <!--ROW-->
            <div class="grid-50 mobile-grid-100">
                <label for="txtTelefone">Telefone</label>
                <input type="text" id="txtTelefone" name="txtTelefone">
            </div>

            <div class="grid-50 mobile-grid-100">
                <label for="slAssunto">Assunto</label>
                <select name="slAssunto" id="slAssunto">
                    <option value="1">Comercial</option>
                    <option value="2">Dúvidas</option>
                    <option value="3">Parceria</option>
                    <option value="4">Outros</option>
                </select>
            </div>

            <div class="grid-100 mobile-grid-100">
                <label for="txtMensagem">Mensagem</label>
                <textarea name="txtMensagem" id="txtMensagem" cols="30" rows="10"></textarea>
            </div>

            <div class="grid-100 mobile-grid-100 text-right">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>

</html>