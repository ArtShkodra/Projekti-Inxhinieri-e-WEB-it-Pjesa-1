<?php

class Movie{
    private $type;
    private $movie;
    private $date;



    function __construct($type,$movie,$date){
            $this->type = $type;
            $this->movie = $movie;
            $this->date = $date;
    }


    function getType(){
        return $this->type;
    }
    function getMoview(){
        return $this->movie;
    }
    function getDate(){
        return $this->date;
    }
}

?>