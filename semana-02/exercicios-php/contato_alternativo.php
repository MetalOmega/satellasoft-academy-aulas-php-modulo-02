<?php

$valido = false;

$nome = filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING);

$valido = validar($nome);

function validar($nome)
{
return true;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato Alternativo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/unsemantic.css">
</head>

<body>
    
    <?php
    if ($valido): ?>
    <p><?= $nome ?></p>
<?php else: ?>
    <p>Inválido</p>
    <?php endif; ?>
     
</body>

</html>