<?php
// definiamo una nuova classe 
class Movie
{
    // dichiariamo le variabili di istanza della classe 
    public $title;
    public $geners;
    public $duration;

    // creiamo una funzione costruttore che al momento dell'istanza degli oggetti
    // appartenti a questa clsse viene 'lanciata' e chiede i paramentri 
    function __construct(string $_title, array $_geners, int $_duration)
    {
        $this->title = $_title;
        $this->geners = $_geners;
        $this->duration = $_duration;
    }
}
