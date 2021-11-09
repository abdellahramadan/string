<?php

namespace App\Tests\Strings;

use AbdellahRamadan\String\Strings;
use PHPUnit\Framework\TestCase;

class ConcatTest extends TestCase
{
    public function testTwoStrinsCanBeConcatenated()
    {
        $string1 = 'Hello';
        $string2 = 'World';

        $this->assertSame('Hello World', Strings::concat($string1, $string2));
    }
}