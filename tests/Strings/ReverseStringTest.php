<?php

namespace App\Tests\Strings;

use AbdellahRamadan\String\Strings;
use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase
{
    public function testReversedString()
    {
        $this->assertSame(Strings::reverse('Hi Hello'), 'olleH iH');
    }
}