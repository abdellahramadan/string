<?php


namespace App\Tests\Strings;

use App\String\Strings;
use PHPUnit\Framework\TestCase;

class UpperCaseFirstTest extends TestCase
{
    public function testAStringShouldStartWithUppercase()
    {
        $this->assertSame(Strings::uppercaseFirst('i am a developer'), 'I am a developer');

        $this->assertStringStartsWith('A', Strings::uppercaseFirst('a developer'));
    }
}