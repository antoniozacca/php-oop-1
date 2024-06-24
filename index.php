<?php
class Movie {
   public $nome;
   public $genere;
   function __construct($_nome)
   {
    $this->nome=$_nome;
   }
}
$film= new Movie('the wolf of wall street');
echo $film->nome;
