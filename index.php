<?php
    class Movie {
        public $title;
        public $actors;
        public $year;
        public $genre;
        public $duration;
    }
    public function __construct(
        string $title,
        string|array $actors,
        int $year,
        string|array $genre,
        int $duration
        ){
            $this->title = $title;
            $this->actors = $actors;
            $this->year = $year;
            $this->genre = $genre;
            $this->duration = $duration;
        }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 1</title>
    </head>
    <body>
        
    </body>
</html>