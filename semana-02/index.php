<?php

$string = 'texto';
$numero = '1234567890';
$bool = true;
$bool2 = false;

//echo $numero;
//const NOME_COMPLETO = 'Metal Omega';
//define('NOME_COMPLETO' , 'Metal Omega');
//echo NOME_COMPLETO;

/*
$jogos = array(
    'Marvel Torneio de Campeões', 
    'Fifa 2020', 
    'Gran Turismo'
);

echo $jogos[0];



$jogos = [
    'Marvel Torneio de Campeões', 
    'Fifa 2020', 
    'Gran Turismo'
];

echo $jogos[2];


$dados = [
    'nome' => 'Metal Omega',
    'email' => 'metalomega@gmail.com'
];

//echo json_encode($dados);
//echo $dados['nome'];

$clientes = [
    ['Metal Omega', 'Brasília'],
    ['Metal Omega', 'São José do Rio Preto'],
    ['Metal Omega', 'Frutal'],
    ['Metal Omega', 'São Paulo'],
    ['Metal Omega', 'Goiânia'],
];

print_r($clientes);


$clientes = [
    ['Metal Omega', 'Brasília'],
    ['Metal Omega', 'São José do Rio Preto'],
    ['Metal Omega', 'Frutal'],
    ['Metal Omega', 'São Paulo'],
    ['Metal Omega', 'Goiânia'],
];

ddd($clientes);

function ddd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '<pre>';
}


$clientes = [
    ['Metal Omega', 'Brasília'],
    ['Metal Omega', 'São José do Rio Preto'],
    ['Metal Omega', 'Frutal'],
    ['Metal Omega', 'São Paulo'],
    ['Metal Omega', 'Goiânia'],
];

var_dump($clientes);

function ddd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '<pre>';
}


$clientes = [
    ['Metal Omega', 'Brasília'],
    ['Metal Omega', 'São José do Rio Preto'],
    ['Metal Omega', 'Frutal'],
    ['Metal Omega', 'São Paulo'],
    ['Metal Omega', 'Goiânia'],
];

var_dump($clientes[1]);

function ddd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '<pre>';
}


var_dump($clientes[1][0]);

function ddd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '<pre>';
}


echo soma();

function soma($val = 1)
{
    return $val + $val;
}


echo soma(5);

function soma($val = 1)
{
    return $val + $val;
}


$idade = 18;

if ($idade >= 18) {
    echo 'Pode entrar!';
}elseif($idade <18 && $idade >= 16){
    echo 'Entra com acompanhante!';
}else{
    echo 'Não pode entrar!';
}


$idade = 17;

if ($idade >= 18) {
    echo 'Pode entrar!';
}elseif($idade <18 && $idade >= 16){
    echo 'Entra com acompanhante!';
}else{
    echo 'Não pode entrar!';
}


$idade = 15;

if ($idade >= 18) {
    echo 'Pode entrar!';
}elseif($idade <18 && $idade >= 16){
    echo 'Entra com acompanhante!';
}else{
    echo 'Não pode entrar!';
}


define('PERIODO', 'MANHA');


$periodo = 'mAnha';

switch (strtolower($periodo)) {
    case 'manha':
        echo 'Bom dia';
        break;
    case 'tarde':
        echo 'Boa tarde';
        break;
    case 'noite':
        echo 'Boa noite';
        break;
    case 'madrugada':
        echo 'E ae dev';
        break;
    default:
        echo 'periodo inexistente';
}


$clientes = [
    ['Metal Omega', 'Brasília'],
    ['Metal Omega Service', 'São José do Rio Preto'],
    ['Metal Omega 1', 'Frutal'],
    ['Metal Omega 2', 'São Paulo'],
    ['Metal Omega 3', 'Goiânia'],
];

for ($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i][0] . '<br>';
}



$clientes = [
    ['Metal Omega', 'Brasília'],
    ['Metal Omega Service', 'São José do Rio Preto'],
    ['Metal Omega 1', 'Frutal'],
    ['Metal Omega 2', 'São Paulo'],
    ['Metal Omega 3', 'Goiânia'],
];

foreach ($clientes as $clientes) {
    echo $clientes[0]. '<br>';
}



$clientes = [
    ['Metal Omega', 'Brasília'],
    ['Metal Omega Service', 'São José do Rio Preto'],
    ['Metal Omega 1', 'Frutal'],
    ['Metal Omega 2', 'São Paulo'],
    ['Metal Omega 3', 'Goiânia'],
];

foreach ($clientes as $clientes) :
    echo $clientes[0]. '<br>';
endforeach;



$clientes = [
    ['Metal Omega', 'Brasília'],
    ['Metal Omega Service', 'São José do Rio Preto'],
    ['Metal Omega 1', 'Frutal'],
    ['Metal Omega 2', 'São Paulo'],
    ['Metal Omega 3', 'Goiânia'],
];

foreach ($clientes as $clientes)
    echo $clientes[0]. '<br>';

    */

include 'config.php';
die();
require 'config.php';

include_once 'config.php';
require_once 'config.php';