<?php

class Movie
{
    public $title;
    public $genres;

    public function __construct(string $title, array $genres)
    {
        $this->title = $title;
        $this->genres = $genres;
    }

    public function getInfo()
    {
        $info = "Title: {$this->title}, Genres: " . implode(', ', $this->genres);
        return $info;
    }
}