<?php

$dados = getInput();
$nome = null;

$valido = validate($dados);

if($valido){
    $ex  = explode(' ', $dados->nome);
    $nome = $ex[0];

    $assunto = getAssunto($dados->assunto);
}

function getinput()
{
    return (object) [
        'nome' => filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING),
        'email' => filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_EMAIL),
        'telefone' => filter_input(INPUT_POST, 'txtTelefone', FILTER_SANITIZE_NUMBER_INT),
        'assunto' => filter_input(INPUT_POST, 'slAssunto', FILTER_SANITIZE_NUMBER_INT),
        'mensagem' => filter_input(INPUT_POST, 'txtMensagem', FILTER_SANITIZE_STRING),
    ];
}

function validate($dados){

    if (strlen($dados->nome) < 2) {
        return false;
    }

    if (strlen($dados->email) < 6 || strpos($dados->email, '@') <= 0 || strpos($dados->email, '.') <= 0) {
        return false;
    }
    
    if (strlen($dados->telefone) > 11 || strlen($dados->telefone) < 10) {
        return false;
    }
    
    if ($dados->assunto < 1 || $dados->assunto > 4) {
        return false;
    }
    
    if (strlen($dados->mensagem) < 5 || strlen($dados->mensagem) > 500) {
        return false;
    }

    return true;

}

function getAssunto($code){
    switch($code){
            case 1:
            return 'comercial';
            break;
        
            case 2:
            return 'Dúvidas';
            break;

            case 3:
            return 'Parceria';
            break;

            case 4:
            return 'Outros';
            break;

    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/unsemantic.css">
</head>

<body>
 
<div class="max-width">
        <h1>Contato</h1>
        <?php if($valido): ?>
        <p>Olá <span><?=$nome;?></span>, recebemos a sua mensagem. Em breve um de nossos atendentes entrará em contato.</p>
        <hr>
        <p><span>Nome: </span> <?= $dados->nome;?> </p>
        <p><span>e-mail: </span> <?= $dados->email;?> </p>
        <p><span>Telefone: </span> <?= $dados->telefone;?> </p>
        <p><span>Assunto: </span> <?= getAssunto($dados->assunto);?> </p>
        <p><span>Mensagem: </span></p>
        <p><?=$dados->mensagem;?> </p>

<?php else: ?>
<p>Os dados fornecidos são inválidos.</p>
<a href="index.php">Voltar</a>
<?php endif; ?>
</div>
     
</body>

</html>