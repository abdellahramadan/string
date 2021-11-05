<?php

namespace App\Test\Strings;

use PHPUnit\Framework\TestCase;
use AbdellahRamadan\String\Strings;

class LowerCaseStringTest extends TestCase
{
    public function testItWorks()
    {
        $this->assertTrue(true);
    }

    public function testAStringCanBeConvertedToLowerCase()
    {
        $this->assertSame(Strings::lowercase('I AM BEING CONVERTED TO LOWERCASE'), 'i am being converted to lowercase');
    }

}