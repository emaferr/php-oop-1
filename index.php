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
        $checkImage = getimagesize($path);

        if(!$checkImage){
            return $this->path = 'https://upload.wikimedia.org/wikipedia/commons/c/cd/Immagine_non_disponibile.JPG';
        }else{
            return $this->path = $path;
        }     
    }   
}
$movies = [
    new Movie ('https://pad.mymovies.it/filmclub/2016/11/201/locandna.jpg','Deadpool 1','Inizialmente alle prese con la sua solita staticità di esistenza. Un giono però incontra e si innamora di una prostituta, Vanessa. La sua vita comincia a cambiare e sembra andare per il meglio, fin quando non scopre di avere un cancro all’ultimo stadio. Si lascia convincere a prendere parte ad un esperimento genetico, che gli causa un mutamento facciale. Si trasforma così in Deadpool, un anti-eroe con due finalità: uccidere Ajax che lo ha convinto sulla sperimentazione e cosa più importante trovare la forza per farsi vedere da Vanessa.',2016,8.5),
    new Movie ('https://pad.mymovies.it/filmclub/2016/11/201/locandina.jpg','Deadpool 2',"Il mercenario malato di cancro e trasformato in un essere pressoché immortale, capace di rigenerarsi da ogni ferita, si gode finalmente la vita insieme alla compagna Vanessa. Ma ad accettare irresponsabilmente, com'è nel suo stile, missioni da sicario in giro per tutto il mondo si finisce per farsi dei nemici e arriva presto per Deadpool il momento di pagare il conto. Una batosta tale da ritrovarsi a casa degli X-Men, con Colosso che ancora una volta gli dà la possibilità di essere un eroe e lo porta con sé in una missione per calmare un giovanissimo e potente mutante. Prevedibilmente le cose non vanno a finir bene e Deadpool si ritrova nei guai insieme al ragazzino a cui però si sta affezionando tanto che, quando dal futuro giungerà un letale guerriero deciso a ucciderlo, il loquace ex mercenario farà tutto il possibile per proteggere il giovane.",2018,8.2),
];
var_dump($movies);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($movies as $movie) : ?>              
    <div>
        <img src="<?= $movie->getPath();?>" alt="">
        <h2><?= $movie->name; ?></h2>
        <p><?= $movie->desc; ?></p>
        <div><?= $movie->year; ?></div>
    </div>       
<?php endforeach ?>
</body>
</html>