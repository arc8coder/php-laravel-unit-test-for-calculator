<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Services\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_two_numbers()
    {
        $calc = new Calculator();
        $result = $calc->add(1, 2);
        $this->assertEquals($result, 3);
    }

    public function test_add_five_numbers()
    {
        $calc = new Calculator();
        $result = $calc->add(1, 2, 3,4,5);
        $this->assertEquals($result, 15);
    }
}
