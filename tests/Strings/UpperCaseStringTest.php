<?php

namespace App\Tests\Strings;

use AbdellahRamadan\String\Strings;
use PHPUnit\Framework\TestCase;

class UpperCaseStringTest extends TestCase
{
    public function testAStringCanBeConvertedToUpperCase()
    {
        $this->assertSame(Strings::uppercase('this is an uppercase'), 'THIS IS AN UPPERCASE');
    }
}