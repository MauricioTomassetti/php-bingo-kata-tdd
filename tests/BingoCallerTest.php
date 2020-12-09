<?php

use BingoCaller;
use PHPUnit\Framework\TestCase;

class BingoCallerTest extends TestCase
{
    public function testWhenCallNumberItsInTheValidRange()
    {
        $caller = new BingoCaller();
        $number = $caller->callNumber();

        //Valdiate assert conditional.
        $this->assertTrue($number >= BingoRules::MIN_CARD_NUMBER && $number <= BingoRules::MAX_CARD_NUMBER);
    }

    public function testWhenCalls75TimesAllNumbersArePresent()
    {
        $caller = new BingoCaller();
        $callsNumbers = [];
        $expectedNumbers = range(BingoRules::MIN_CARD_NUMBER, BingoRules::MAX_CARD_NUMBER);

        for ($i = 1; $i <= 75; ++$i) {
            $callsNumbers[] = $caller->callNumber();
        }

        sort($callsNumbers);

        $this->assertEquals($expectedNumbers, $callsNumbers);
    }


}
