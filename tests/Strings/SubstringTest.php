<?php

namespace App\Tests\Strings;

use AbdellahRamadan\String\Strings;
use PHPUnit\Framework\TestCase;

class SubstringTest extends TestCase
{
    public function testSubstring()
    {
        $string = 'It is a fun journey';

        $this->assertSame('It', Strings::substring($string, 2));
    }
}