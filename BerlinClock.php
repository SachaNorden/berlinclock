<?php

class BerlinClock
{

    private $seconde = true;
    private $fiveHours = 4;
    private $hours = 4;
    private $fiveMinutes = 11;
    private $minutes = 4;


    function getSecondes()
    {
        return $this->seconde;
    }

    function getFiveHours()
    {
        return $this->fiveHours;
    }

    function getHours(){
        return $this->hours;
    }

    function getFiveMinutes()
    {
        return $this->fiveMinutes;
    }

    function getMinutes(){
        return $this->minutes;
    }
}

