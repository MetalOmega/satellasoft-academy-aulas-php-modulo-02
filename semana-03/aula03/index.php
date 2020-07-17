<?php
require_once 'vendor/autoload.php';

use App\Controller;
//new \App\Controller;
$controller = new Controller();

//$controller->show();
//require_once('view/teste.php');

$dados = [
    //'chave' => 'valor'
    'nome' => 'Metal Omega'
];

//$dados['chave']

$controller->view('contato/teste.php', $dados);