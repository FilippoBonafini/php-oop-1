<?php

class Movie
{
    public function __construct(public string $title, public array $genres)
    {
        $this->title = $title;
        $this->genres = $genres;
    }

    public function getInfo()
    {
        $info = "Title: {$this->title}, Genres: " . implode(', ', $this->genres);
        return $info;
    }
    public function getTitle()
    {
        $title = "Title: {$this->title}";
        return $title;
    }
    public function getGeners()
    {
        $geners = "Genres: " . implode(', ', $this->genres);
        return $geners;
    }
}