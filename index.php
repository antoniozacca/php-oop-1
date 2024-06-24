<?php
class Movie {
   private $nome;
   private $genere;
   private $voto;
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
   function setVoto($_voto){
      if($_voto < 0 || $_voto > 5){
         throw new Exception('Inserisci un voto compreso tra 0 e 5!!!!!');
      }

      $this->voto=$_voto;
   }
   function getVoto(){
      return $this->voto;
   }
   // function controllaVoto(){
   //    if($this->voto < 0 || $this->voto > 5){
   //       throw new Exception('Inserisci un voto compreso tra 0 e 5!!!!!');
   //    }
   //    return $this->voto;
   // }
   
}

$film = new Movie();
$film->setNome('the wolf of wall street');
echo $film->getNome();
echo "<br>";
$film->setGenere('commedia');
echo $film->getGenere();
echo "<br>";
try {
   $film->setVoto(1);
   echo $film->getVoto();
} catch (Exception $e) {
   echo $e->getMessage();
}
