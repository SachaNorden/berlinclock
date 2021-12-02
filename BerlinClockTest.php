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
        $date = new DateTime("now");
        $clock = new BerlinClock($date);

        $actual = $clock->getSecondes();

        $this->assertEquals((int)date("s")%2, $actual);
    }

    public function testFiveMinutes()
    {
        $date = new DateTime("now");
        $clock = new BerlinClock($date);

        $actual = $clock->getFiveMinutes();
        $expected = floor((int)date("i") / 5);

        $this->assertEquals($expected, $actual);
    }

    public function testMinutes()
    {
        $date = new DateTime("now");
        $clock = new BerlinClock($date);

        $actual = $clock->getMinutes();
        $expected = (int)date("i") % 5;

        $this->assertEquals($expected, $actual);
    }

    public function testFiveHours()
    {
        $date = new DateTime("now");
        $clock = new BerlinClock($date);

        $actual = $clock->getFiveHours();
        $expected = floor((int)date("H") / 5);

        $this->assertEquals($expected, $actual);
    }

    public function testHours()
    {
        $date = new DateTime("now");
        $clock = new BerlinClock($date);

        $actual = $clock-> getHours();
        $expected = (int)date("H") % 5;

        $this->assertEquals($expected, $actual);
    }
}
