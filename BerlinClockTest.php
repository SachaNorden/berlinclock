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
        $this->assertEquals(true, $actual);
    }
}
