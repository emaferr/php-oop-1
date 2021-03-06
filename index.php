<?php
require __DIR__ . '/classes/Movie.php';
$movies = [
    new Movie ('','Deadpool 1',"Inizialmente alle prese con la sua solita staticità di esistenza. Un giono però incontra e si innamora di una prostituta, Vanessa. La sua vita comincia a cambiare e sembra andare per il meglio, fin quando non scopre di avere un cancro all’ultimo stadio. Si lascia convincere a prendere parte ad un esperimento genetico, che gli causa un mutamento facciale. Si trasforma così in Deadpool, un anti-eroe con due finalità: uccidere Ajax che lo ha convinto sulla sperimentazione e cosa più importante trovare la forza per farsi vedere da Vanessa.",2016,8.5),
    new Movie ('https://pad.mymovies.it/filmclub/2016/11/201/locandina.jpg','Deadpool 2',"Il mercenario malato di cancro e trasformato in un essere pressoché immortale, capace di rigenerarsi da ogni ferita, si gode finalmente la vita insieme alla compagna Vanessa. Ma ad accettare irresponsabilmente, com'è nel suo stile, missioni da sicario in giro per tutto il mondo si finisce per farsi dei nemici e arriva presto per Deadpool il momento di pagare il conto. Una batosta tale da ritrovarsi a casa degli X-Men, con Colosso che ancora una volta gli dà la possibilità di essere un eroe e lo porta con sé in una missione per calmare un giovanissimo e potente mutante. Prevedibilmente le cose non vanno a finir bene e Deadpool si ritrova nei guai insieme al ragazzino a cui però si sta affezionando tanto che, quando dal futuro giungerà un letale guerriero deciso a ucciderlo, il loquace ex mercenario farà tutto il possibile per proteggere il giovane.",2018,8.2),
];
// var_dump($movies);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        .header{
            text-align: center;
        }
        .card{
            padding: .5rem;
            margin: .5rem;
        }
        span{
            font-size: 1rem;
            font-weight: bolder;
        }

    </style>
</head>
<body>
    <div class="header p-4">
        <h1>MOVIE PHP</h1>
        <h4>the project only wants to be logical not to look at graphics and layouts</h4>
    </div>
    <div class="container d-flex">
    <?php foreach ($movies as $movie) : ?> 
        <div class="card" style="width: 18rem;">
            <img src="<?= $movie->getPath();?>" height="400px" class="card-img-top" alt="...">
            <p class="card-title"> <span>Title:</span><?= $movie->name; ?></p>
            <p><span class="">Vote:</span> <?= $movie->vote; ?></p>
            <p><span class="">Year:</span> <?= $movie->year; ?></p>
            <div style="height: 200px;" class="desc overflow-scroll">
                <p class="card-text"><span class="">Plot:</span> <?= $movie->desc; ?></p>
            </div>
        </div>            
    <?php endforeach ?>
    </div> 
</body>
</html>