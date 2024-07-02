<?php

class Movie{
    public $titolo;
    public $genere;
    public $anno;

    function __construct($titolo, $genere, $anno){
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->anno = $anno;
    }

    function getDescription(){
        return "Titolo: $this->titolo, Genere: $this->genere, Anno: $this->anno,";
    }
}

$movie1 = new Movie("La vita è bella", "Comedy/Drama", 1997);
$movie2 = new Movie("Nuovo Cinema Paradiso", "Drama", 1988);
$movie3 = new Movie("Il postino","Romance/Drama",1994);
$movie4 = new Movie("La dolce vita", "Drama", 1960);
$movie5 = new Movie("Ladri di biciclette","Drama", 1948 );


$movies = [$movie1, $movie2, $movie3, $movie4, $movie5];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<body>
    <header>
        <h1>
            Lista Film
        </h1>
    </header>
    <main>
    <section>
        <?php foreach ($movies as $movie): ?>
            <p><?php echo ($movie->getDescription()); ?></p>
        <?php endforeach; ?>
    </section>
    </main>
</body>
</html>