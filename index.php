<?php
class Movie {
   private $nome;
   private $genere;
   function __construct($_nome)
   {
    $this->nome=$_nome;
   }
   function getNome(){
      return $this->nome;
   }
   function setGenere($_genere){
      $this->genere=$_genere;
   }
   function getGenere(){
      return $this->genere;
   }
}
$film= new Movie('the wolf of wall street');
echo $film->getNome();
$film->setGenere('commedia');
echo $film->getGenere();
