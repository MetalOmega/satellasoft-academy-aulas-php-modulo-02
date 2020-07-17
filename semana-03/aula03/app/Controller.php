<?php
namespace App;

class Controller
{
 public function __construct()
 {
  echo 'Construtor';
 }
 /*public function show()
 {
 echo 'Comece o Show';
 }*/
 public function view($view, $params = [])
 {
  $loader = new \Twig\Loader\FilesystemLoader('view/');
  $twig   = new \Twig\Environment($loader, [
   //'cache' => 'cache/',
  ]);

  echo $twig->render($view, $params);
 }
}
