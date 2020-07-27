<?php
require_once 'vendor/autoload.php';

define('VAR_NAME', 'Metal Omega');

use app\controller\Controller;

new Controller('teste', [
 'idade' => 34,
 'nome'  => 'Metal Omega',
 'cidades' => [
     'Brasília',
     'Águas Claras',
     'Plano Piloto',
     'Núcleo Bandeirante',
     'Taguatinga',
     'Samambaia'
 ],
 'mensagem' => 'Seja bem vindo ao site Metal Omega',
 'data' => date('Y-m-d H:i:s')
]);
