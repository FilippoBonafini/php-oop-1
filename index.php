<?php
require_once __DIR__ . '/Models/Movie.php';

// CREIAMO NUOVI OGGETTI MOVIE 
$movie1 = new Movie('Avatar', ['Fantasy', 'Azione']);
$movie2 = new Movie('The ring', ['Horror']);

// --------------------
// STAMPIAMO I RISULTATI 
// --------------------
var_dump($movie1->getInfo());
var_dump($movie2->getInfo());

var_dump($movie1->getTitle());
var_dump($movie2->getTitle());

var_dump($movie1->getGeners());
var_dump($movie2->getGeners());