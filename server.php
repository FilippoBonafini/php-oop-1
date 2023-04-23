<?php
// IMPORTIAMO UNA E UNA SOLA VOLTA IL FILE CONTENTE LA CLASSE 
require_once __DIR__ . '/Models/Movie.php';

//------------------------------------------------------

//SALVIAMO IN VARIABILI I DATI RELATIVI ALL'OGGETTO
$title_film_1 = 'Avatar';
$geners_film_1 = ['Action', 'Fantasy'];
$duration_film_1 = 230;

// INSTANZIAMO 1 OGGETTO MOVIE
$film_1 = new Movie($title_film_1, $geners_film_1, $duration_film_1);

// STAMPIAMO A SCHERMO L'OGGETTO 1
var_dump($film_1);

//------------------------------------------------------

//SALVIAMO IN VARIABILI I DATI RELATIVI ALL'OGGETTO
$title_film_2 = 'The wolf of wall street';
$geners_film_2 = ['Drugs', 'Finance'];
$duration_film_2 = 140;

// INSTANZIAMO 1 OGGETTO MOVIE
$film_2 = new Movie($title_film_2, $geners_film_2, $duration_film_2);

// STAMPIAMO A SCHERMO L'OGGETTO 2
var_dump($film_2);
