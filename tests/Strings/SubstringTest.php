<?php

namespace App\Tests\Strings;

use AbdellahRamadan\String\Strings;
use PHPUnit\Framework\TestCase;

class SubstringTest extends TestCase
{
    public function testSubString()
    {
        $this->assertSame(Strings::subString('I am Ramadan. A web dev', 5, 7), 'Ramadan');
        $this->assertSame(Strings::subString('this is another test', -4), 'test');
    }
}