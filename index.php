<?php

/**
 * Movie Class
 * @author Emanuele <studente@boolean.it>
 * @copyright 2021 Emanuele
 */
class Movie
{
    public $poster;
    public $name;
    public $desc;
    public $year;
    public $vote;

    public function __construct($poster = 'https://upload.wikimedia.org/wikipedia/commons/c/cd/Immagine_non_disponibile.JPG', string $name, string $desc, int $year, float $vote)
    {
        $this->poster = $poster;
        $this->name = $name;
        $this->desc = $desc;
        $this->year = $year;
        $this->vote = $vote;
    }


    public function getVote(int $vote) 
    {
        $this->vote = $vote;
    }

}

$movies = [
    new Movie ('https://upload.wikimedia.org/wikipedia/commons/c/cd/Immagine_non_disponibile.JPG','Marvel Avanger 1','Molto bello',1991,8.5),
    new Movie ('https://upload.wikimedia.org/wikipedia/commons/c/cd/Immagine_non_disponibile.JPG','Marvel Avanger 2','Molto brutto',1993,8.2),
    new Movie ('https://upload.wikimedia.org/wikipedia/commons/c/cd/Immagine_non_disponibile.JPG','Marvel Avanger 3','Molto mediocre',1995,7.9),
];

var_dump($movies);