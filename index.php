<?php
class Actor {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Movie {
    private $nome;
    private $generi = [];
    private $actors = [];
    public static $totalMovies = 0;

    public function __construct() {
        self::$totalMovies++;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getNome() {
        return $this->nome;
    }

    function addGenere($genere) {
        $this->generi[] = $genere;
    }

    function getGeneri() {
        return $this->generi;
    }

    function addActor(Actor $actor) {
        $this->actors[] = $actor;
    }

    function getActors() {
        return $this->actors;
    }

    public static function getTotalMovies() {
        return self::$totalMovies;
    }
}


$film = new Movie();
$film->setNome('The Wolf of Wall Street');


$film->addGenere('Commedia');
$film->addGenere('Biografico');
$film->addGenere('Drammatico');


$film->addActor(new Actor('Leonardo DiCaprio'));
$film->addActor(new Actor('Jonah Hill'));


echo $film->getNome() ?? 'Nome non disponibile';
echo "<br>";
echo implode(', ', $film->getGeneri() ?? ['Generi non disponibili']);
echo "<br>";

$actors = $film->getActors();
if ($actors) {
    foreach ($actors as $actor) {
        echo $actor->getName() ?? 'Nome attore non disponibile';
        echo "<br>";
    }
} else {
    echo "Attori non disponibili<br>";
}


echo "Totale film creati: " . Movie::getTotalMovies();
?>