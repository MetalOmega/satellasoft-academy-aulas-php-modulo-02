<?php

//Nome do arquivo com a extensão
$filename = 'academy-satellasoft.txt';

//Verifica a existência da pasta
if (!is_dir('dados')) {
 //Cria um diretório caso não exista
 mkdir('dados');
}

escrever($filename);
ler($filename);

//Lê o arquivo
function escrever($filename)
{
 //$dados = ['nome' => 'Metal Omega', 'email' => 'metalomega@gmail.com'];
 $text = 'Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.';
 //$text = json_encode($dados);
 //Abre para escrita
 $fp = fopen('dados/' . $filename, 'w');
 //Escreve no arquivo
 fwrite($fp, $text);
 //Fecha o arquivo
 fclose($fp);
}

function ler($filename)
{
 $path = 'dados/' . $filename;
 if (!file_exists('dados/' . $filename)) {
  return;
 }

 //Abre o arquivo para leitura
 //$fp = fopen('dados/' . $filename, 'r');
 $fp = fopen($path, 'r');

 //Lê todos os bytes do arquivo
 $conteudo = fread($fp, filesize($path));

 //Fecha o arquivo
 fclose($fp);

 //$arr = json_decode($conteudo);

 //print_r($arr->nome);
 echo $conteudo;
}
