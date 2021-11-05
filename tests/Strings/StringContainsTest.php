<?php


namespace App\Tests\Strings;

use AbdellahRamadan\String\Strings;
use PHPUnit\Framework\TestCase;

class StringContainsTest extends TestCase
{
    public function testAStringContainsAWord()
    {
        $this->assertTrue(Strings::contains('hello world', 'hello'));
    }
}