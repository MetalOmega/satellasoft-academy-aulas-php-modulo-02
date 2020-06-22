<?php

/*
?login=Rafael
&senha=123
&btnlogin=Submit+Query


//ddd($_POST);

if(isset($_POST['login']))

echo $_POST['login'];

function ddd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}


$_GET['login'];

if (isset($_POST['login']))
    echo $_POST['login'];

function ddd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}


echo $_GET['login'];

if (isset($_POST['login']))
    echo $_POST['login'];

function ddd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}


echo $_GET['logado'];

if (isset($_POST['login']))
    echo $_POST['login'];

function ddd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}


//$login = filter_input(INPUT_GET, 'login', FILTER_SANITIZE_NUMBER_INT);

ddd($_SERVER);

die();

$login = filter_input(INPUT_GET, 'login', FILTER_SANITIZE_STRING);

$senha = filter_var($_POST['senha'], FILTER_SANITIZE_NUMBER_FLOAT);

if (isset($_POST['login']))
    echo $_POST['login'];

function ddd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}


$array = null;
    parse_str ($_SERVER['QUERY_STRING'], $array);
    ddd($array ['senha']);

die();

$login = filter_input(INPUT_GET, 'login', FILTER_SANITIZE_STRING);

$senha = filter_var($_POST['senha'], FILTER_SANITIZE_NUMBER_FLOAT);

if (isset($_POST['login']))
    echo $_POST['login'];

function ddd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}
*/

$array = null;
parse_str($_SERVER['QUERY_STRING'], $array);
ddd(http_build_query($array));

die();

$login = filter_input(INPUT_GET, 'login', FILTER_SANITIZE_STRING);

$senha = filter_var($_POST['senha'], FILTER_SANITIZE_NUMBER_FLOAT);

if (isset($_POST['login']))
    echo $_POST['login'];

function ddd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}
