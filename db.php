<?php
// IMPORTIAMO UNA E UNA SOLA VOLTA IL FILE CONTENTE LA CLASSE 
require_once __DIR__ . '/Models/Movie.php';

//------------------------------------------------------
$movies = [
    new Movie('Avatar', ['fantasy', 'action'], 243),
    new Movie('Signore degli anelli', ['fantasy', 'action'], 213),
    new Movie('Titanic', ['love', 'drammatic'], 190),
    new Movie('Armageddon', ['fantasy', 'action', 'apocalyps'], 178),
    new Movie('Superman', ['fantasy', 'action'], 190),
    new Movie('The ring', ['fantasy', 'horror'], 210),
];
