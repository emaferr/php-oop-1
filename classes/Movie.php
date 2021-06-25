<?php
/**
 * Movie Class
 * @author Emanuele <studente@boolean.it>
 * @copyright 2021 Emanuele
 */
class Movie
{
    public $path;
    public $name;
    public $desc;
    public $year;
    public $vote;
    public function __construct($path, string $name, string $desc, int $year, float $vote)
    {
        $this->path = $path;
        $this->name = $name;
        $this->desc = $desc;
        $this->year = $year;
        $this->vote = $vote;
    }

 // return default image if the path is not present
 public function getPath() 
    {   
        $checkImage = getimagesize($this->path);

        if(!$checkImage){
            return $this->path = 'https://upload.wikimedia.org/wikipedia/commons/c/cd/Immagine_non_disponibile.JPG';
        }else{
            return $this->path;
        }   
    }   
}