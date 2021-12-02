<?php

namespace BerlinClock;
require 'BerlinClock.php';

use BerlinClock;
use DateTime;
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{


    public function testSeconde()
    {
        $date1 = new DateTime("00:00:00");
        $date2 = new DateTime("23:59:59");

        $clock1 = new BerlinClock($date1);
        $clock2 = new BerlinClock($date2);

        $actual1 = $clock1->getSecondes();
        $actual2 = $clock2->getSecondes();

        $this->assertEquals("Y", $actual1);
        $this->assertEquals("O", $actual2);
    }

    public function testMinutes()
    {
        $date1 = new DateTime("00:00:00");
        $date2 = new DateTime("23:59:59");
        $date3 = new DateTime("12:32:00");
        $date4 = new DateTime("12:34:00");
        $date5 = new DateTime("12:35:00");

        $clock1 = new BerlinClock($date1);
        $clock2 = new BerlinClock($date2);
        $clock3 = new BerlinClock($date3);
        $clock4 = new BerlinClock($date4);
        $clock5 = new BerlinClock($date5);

        $actual1 = $clock1->getMinutes();
        $actual2 = $clock2->getMinutes();
        $actual3 = $clock3->getMinutes();
        $actual4 = $clock4->getMinutes();
        $actual5 = $clock5->getMinutes();

        $this->assertEquals("OOOO", $actual1);
        $this->assertEquals("YYYY", $actual2);
        $this->assertEquals("YYOO", $actual3);
        $this->assertEquals("YYYY", $actual4);
        $this->assertEquals("OOOO", $actual5);
    }

    public function testFiveMinutes()
    {
        $date1 = new DateTime("00:00:00");
        $date2 = new DateTime("23:59:59");
        $date3 = new DateTime("12:04:00");
        $date4 = new DateTime("12:23:00");
        $date5 = new DateTime("12:35:00");

        $clock1 = new BerlinClock($date1);
        $clock2 = new BerlinClock($date2);
        $clock3 = new BerlinClock($date3);
        $clock4 = new BerlinClock($date4);
        $clock5 = new BerlinClock($date5);

        $actual1 = $clock1->getFiveMinutes();
        $actual2 = $clock2->getFiveMinutes();
        $actual3 = $clock3->getFiveMinutes();
        $actual4 = $clock4->getFiveMinutes();
        $actual5 = $clock5->getFiveMinutes();

        $this->assertEquals("OOOOOOOOOOO", $actual1);
        $this->assertEquals("YYRYYRYYRYY", $actual2);
        $this->assertEquals("OOOOOOOOOOO", $actual3);
        $this->assertEquals("YYRYOOOOOOO", $actual4);
        $this->assertEquals("YYRYYRYOOOO", $actual5);
    }

    public function testHours()
    {
        $date1 = new DateTime("00:00:00");
        $date2 = new DateTime("23:59:59");
        $date3 = new DateTime("02:04:00");
        $date4 = new DateTime("08:23:00");
        $date5 = new DateTime("14:35:00");

        $clock1 = new BerlinClock($date1);
        $clock2 = new BerlinClock($date2);
        $clock3 = new BerlinClock($date3);
        $clock4 = new BerlinClock($date4);
        $clock5 = new BerlinClock($date5);

        $actual1 = $clock1->getHours();
        $actual2 = $clock2->getHours();
        $actual3 = $clock3->getHours();
        $actual4 = $clock4->getHours();
        $actual5 = $clock5->getHours();

        $this->assertEquals("OOOO", $actual1);
        $this->assertEquals("RRR0", $actual2);
        $this->assertEquals("RROO", $actual3);
        $this->assertEquals("RRRO", $actual4);
        $this->assertEquals("RRRR", $actual5);
    }

    public function testFiveHours()
    {
        $date1 = new DateTime("00:00:00");
        $date2 = new DateTime("23:59:59");
        $date3 = new DateTime("02:04:00");
        $date4 = new DateTime("08:23:00");
        $date5 = new DateTime("16:35:00");

        $clock1 = new BerlinClock($date1);
        $clock2 = new BerlinClock($date2);
        $clock3 = new BerlinClock($date3);
        $clock4 = new BerlinClock($date4);
        $clock5 = new BerlinClock($date5);

        $actual1 = $clock1->getFiveHours();
        $actual2 = $clock2->getFiveHours();
        $actual3 = $clock3->getFiveHours();
        $actual4 = $clock4->getFiveHours();
        $actual5 = $clock5->getFiveHours();

        $this->assertEquals("OOOO", $actual1);
        $this->assertEquals("RRRR", $actual2);
        $this->assertEquals("OOOO", $actual3);
        $this->assertEquals("ROOO", $actual4);
        $this->assertEquals("RRRO", $actual5);
    }
}
