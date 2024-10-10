<?php
    class Movie {
        private $title;
        public $actors;
        public $year;
        public $genres;
        public $duration;

        public function __construct(
            string $title,
            string|array $actors,
            int $year,
            string|array $genres,
            string $duration
        ){
            $this->title = $title;
            $this->actors = $actors;
            $this->year = $year;
            $this->genres = $genres;
            $this->duration = $duration;
        }

        public function setTitle($title){
            if(strlen($title) > 1){
                $this->title = $title;
            }
        }

        public function getTitle(){
            return $this->title;
        }
        
    }
    $actors = [
        'Matthew McConaughey',
        'Jessica Chastain',
        'Anne Hathaway',
        'Timothèe Chalamet'
    ];
    $genres = [
        'Sci-fi',
        'Avventura'
    ];
    $interstellar = new Movie('Interstellar', $actors, 2014, $genres, '2h 49 min');
    var_dump($interstellar);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 1</title>
    </head>
    <body>
        <ul>
            <li>
                <h1>
                    Film
                </h1>
            </li>
            <?php foreach ($interstellar as $singleItem){
                if(!is_array($singleItem) && is_numeric($singleItem)){
                    echo "<li> Anno:".$singleItem."</li>";
                }
                else if (is_array($singleItem) && $singleItem == $actors){
                    foreach($singleItem as $key => $innerItem){
                        echo "<li>Attore ".($key + 1).": ".$innerItem."</li>";
                    }
                }
                else if(is_array($singleItem)&& $singleItem == $genres ){
                    foreach($singleItem as $key => $innerItem){
                        echo "<li>Genere ".($key + 1).": ".$innerItem."</li>";
                    }
                }
                else{
                    echo "<li> Durata:".$singleItem."</li>";
                }
            }
            ?>
            
           
           

        </ul>
    </body>
</html>