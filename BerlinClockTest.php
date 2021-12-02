<?php

namespace BerlinClock;
require 'BerlinClock.php';

use BerlinClock;
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    public function testSeconde()
    {
        // Arrange
        $clock = new BerlinClock();

        // Act
        $actual = $clock->getSecondes();

        // Assert
        $this->assertEquals((int)date("s")%2 == 1, $actual);
    }

    public function testFiveMinutes()
    {
        // Arrange
        $clock = new BerlinClock();

        // Act
        $actual = $clock->getFiveMinutes();
        $expected = round((int)date("i") / 5);

        // Assert
        $this->assertEquals($expected, $actual);
    }

    public function testMinutes()
    {
        // Arrange
        $clock = new BerlinClock();

        // Act
        $actual = $clock->getMinutes();
        $expected = round((int)date("i") % 5);

        // Assert
        $this->assertEquals($expected, $actual);
    }
}
