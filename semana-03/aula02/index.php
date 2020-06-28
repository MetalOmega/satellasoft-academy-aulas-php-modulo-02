<?php
date_default_timezone_set('America/Sao_Paulo');

$path = 'files/';
//Verifica se uma variável existe
if (isset($_FILES['file'])) {
 /*
 [name] => webalizer.jpg
 [type] => image/jpeg
 [tmp_name] => /opt/lampp/temp/phpmL8J5e
 [error] => 0
 [size] => 69625 --em bytes
  */

 $mime = [
  'image/jpeg',
  'image/png',
 ];

 $rename = true;
 //2,5MB > Bytes
 $maxSize = 2.5e+6;

 $file = $_FILES['file'];

 /*
 echo '<pre>';
 print_r($_FILES['file']);
 die();
  */

//Validação do tipo de imagem
 $type = mime_content_type($file['tmp_name']);
 //die($mime);

 /*if (!in_array($file['type'], $mime))*/
 if (!in_array($type, $mime)) {
  echo 'MIME Type inválido.';
  return;
 }

//print_r($file['size']);
//die();

 if($file['size'] > $maxSize){
     echo('O arquivo é maior que o permitido! Máx. 2,5MB');
     return;
 }

 $name = $_FILES['file']['name'];

 if ($rename) {
  $ex   = explode('.', $file['name']);
  $name = md5(date('dmYHis')) . '.' . (end($ex));

  //die($rand);
  //$rand = md5('Metal Omega');
  //die(date('dmYHis'));
  //$rand = md5(date('dmYHis')) . '.' . (end($ex));

//print_r($ex);
  //print_r(end($ex));
  //die();
 }

 move_uploaded_file($_FILES['file']['tmp_name'], $path . $name);
 echo('Arquivo enviado!');

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UploadFile</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <!--<input type="file" multiple="">-->
        <input type="file" name="file" accept="image/*">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
