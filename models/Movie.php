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

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        if(strlen($title) > 0){
            $this->title = $title;
        }
    }
}

