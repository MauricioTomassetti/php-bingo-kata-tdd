<?php

use BingoCardGenerator;
use PHPUnit\Framework\TestCase;

class BingoCardGeneratorTest extends TestCase{

    public function testCardCotainsValidNumbersAccordingToColumn()
    {
        $generator = new BingoCardGenerator();
        $card = $generator->generate();

        $this->assertTrue($card->isValid());

    }
}