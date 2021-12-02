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

    public function getSecondes(): int
    {
        return $this->seconde;
    }

    public function getFiveHours(): int
    {
        return $this->fiveHours;
    }

    public function getHours(): int
    {
        return $this->hours;
    }

    public function getFiveMinutes(): int
    {
        return $this->fiveMinutes;
    }

    public function getMinutes(): int
    {
        return $this->minutes;
    }
}

