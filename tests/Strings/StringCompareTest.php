<?php


namespace App\Tests\Strings;


use AbdellahRamadan\String\Strings;
use PHPUnit\Framework\TestCase;

class StringCompareTest extends TestCase
{
    public function testBothStringsAreEqual()
    {
        $string = 'hello string';

        $this->assertTrue(Strings::compare('hello string', $string));
    }

    public function testBothStringsAreEqualNonCaseSensitive()
    {
        $string = 'hello TEST dev';

        $this->assertTrue(Strings::compareCaseInsentive('hello test dev', $string));
    }
}