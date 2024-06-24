<?php
class Movie {
   private $nome;
   private $genere;
   function setNome($_nome){
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
$film = new Movie();
$film->setNome('the wolf of wall street');
echo $film->getNome();
echo "<br>";
$film->setGenere('commedia');
echo $film->getGenere();
