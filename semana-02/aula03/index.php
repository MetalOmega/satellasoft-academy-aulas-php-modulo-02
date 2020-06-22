<?php


require_once('pessoa.php');

$pessoa = new pessoa();

//$pessoa = new pessoa(400);

//$pessoa->salario = 750;

$pessoa->setSalario(1500);

//echo $pessoa->getSalario();

//echo $pessoa->calculaSalario(500);

echo $pessoa->obterDados('Metal Omega');
