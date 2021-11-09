<?php


namespace App\Tests\Strings;

use AbdellahRamadan\String\Strings;
use PHPUnit\Framework\TestCase;

class UpperCaseFirstTest extends TestCase
{
    public function testAStringShouldStartWithUppercase()
    {
        $this->assertSame('I am a developer', Strings::uppercaseFirst('i am a developer'));

        $this->assertStringStartsWith('A', Strings::uppercaseFirst('a developer'));
    }
}