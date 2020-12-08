<?php

namespace tests;

use App\BingoCaller;
use PHPUnit\Framework\TestCase;

class BingoCallerTest extends TestCase
{
    public function testWhenCallNumberItsInTheValidRange()
    {
        $caller = new BingoCaller();
        $number = $caller->callNumber();

        //Valdiate assert conditional.
        $this->assertTrue($number >= 1 && $number <= 75);
    }

    public function testWhenCalls75TimesAllNumbersArePresent()
    {
        $caller = new BingoCaller();
        $callsNumbers = [];
        $expectedNumbers = range(1, 75);

        for ($i = 1; $i <= 75; $i++) {
            $callsNumbers[] = $caller->callNumber();
        }

        sort($callsNumbers);

        $this->assertEquals($expectedNumbers, $callsNumbers);
    }
}
