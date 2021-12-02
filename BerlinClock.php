<?php

class BerlinClock
{
    private $seconde;
    private $fiveHours = 4;
    private $hours = 4;
    private $fiveMinutes = 11;
    private $minutes = 4;

    public function __construct(){
        $this->seconde = (int)date("s")%2 == 1;
        $this->fiveHours = floor((int)date("h") / 5);
        $this->hours = (int)date("h") % 5;

        $this->fiveMinutes = floor((int)date("i") / 5);
        $this->minutes = (int)date("i") % 5;
    }

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

