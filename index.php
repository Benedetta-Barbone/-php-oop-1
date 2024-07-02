<!-- create un file index.php in cui:
è definita una classe ‘Movie’

=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
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
}

?>