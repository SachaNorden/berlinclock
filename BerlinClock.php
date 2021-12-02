<?php

class BerlinClock
{
    private DateTime $actualDate;
    private int $seconde;
    private int  $fiveHours;
    private int $hours;
    private int $fiveMinutes;
    private int $minutes;

    public function __construct($date)
    {

        $this->actualDate = $date;
        $this->seconde = (int) $date->format("s")%2;
        $this->fiveHours = floor((int) $date->format("H") / 5);
        $this->hours = (int) $date->format("H") % 5;

        $this->fiveMinutes = floor((int)$date->format("i") / 5);
        $this->minutes = (int)$date->format("i") % 5;
    }

    public function getActualDate(): string
    {

        return $this->actualDate->format("H:i:s");
    }

    public function getSecondes(): string
    {
        if($this->seconde == 1)
            return "O";
        return "Y";
    }

    public function getMinutes(): string
    {
        $returnString = "";
        for($i = 0; $i < 4; $i++){
            if($this->minutes > $i)
                $returnString = $returnString."Y";
            else
                $returnString = $returnString."O";
        }
        return $returnString;
    }

    public function getFiveMinutes(): string
    {

        $returnString = "";
        for($i = 0; $i < 11; $i++){
            if($this->fiveMinutes > $i)
                if(($i+1)%3==0)
                    $returnString = $returnString."R";
                else
                    $returnString = $returnString."Y";
            else
                $returnString = $returnString."O";
        }
        return $returnString;
    }

    public function getHours(): string
    {
        $returnString = "";
        for($i = 0; $i < 4; $i++){
            if($this->hours > $i)
                $returnString = $returnString."R";
            else
                $returnString = $returnString."O";
        }
        return $returnString;
    }

    public function getFiveHours(): string
    {
        $returnString = "";
        for($i = 0; $i < 4; $i++){
            if($this->fiveHours > $i)
                $returnString = $returnString."R";
            else
                $returnString = $returnString."O";
        }
        return $returnString;
    }
}

