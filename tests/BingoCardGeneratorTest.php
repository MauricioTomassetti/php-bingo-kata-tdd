<?php

use BingoCardGenerator;
use PHPUnit\Framework\TestCase;

class BingoCardGeneratorTest extends TestCase{

    public function testCardCotainsValidNumbersRespectingColumnBoundaries()
    {
        $generator = new BingoCardGenerator();
        $card = $generator->generate();

        $this->assertTrue($card->isValid());

    }

    public function testCardHasFreeSpaceInTheMiddle()
    {
        $generator = new BingoCardGenerator();
        $card = $generator->generate();

        $this->assertTrue($card->hasFreeSpaceInTheMiddle());
    }
}