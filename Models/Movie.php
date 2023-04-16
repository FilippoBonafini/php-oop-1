<?php
class Movie
{
    public function __construct(public string $title, public array $genres)
    {
        $this->title = $title;
        $this->genres = $genres;
    }

    // FUNZIONE CHE RESTITUISCE TUTTE LE INFO DEL FILM 
    public function getInfo()
    {
        $info = "Title: {$this->title}, Genres: " . implode(', ', $this->genres);
        return $info;
    }

    // FUNZIONE CHE RESTITUISCE IL TITOLO DEL FILM 
    public function getTitle()
    {
        $title = "Title: {$this->title}";
        return $title;
    }

    // FUNZIONE CHE RESTITUISCE IL GENRE DEL FILM 
    public function getGeners()
    {
        $geners = "Genres: " . implode(', ', $this->genres);
        return $geners;
    }
}