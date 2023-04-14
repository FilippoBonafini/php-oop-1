<?php
require_once __DIR__ . '/Models/Movie.php';

$movie1 = new Movie('Avatar', ['Fantasy', 'Azione']);
$movie2 = new Movie('The ring', ['Horror']);

var_dump($movie1->getInfo());
var_dump($movie2->getInfo());

var_dump($movie1->getTitle());
var_dump($movie2->getTitle());

var_dump($movie1->getGeners());
var_dump($movie2->getGeners());