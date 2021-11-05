<?php

namespace App\Tests\Strings;

use AbdellahRamadan\String\Strings;
use PHPUnit\Framework\TestCase;

class PrefixAndSuffixTest extends TestCase
{
    public function testAPrefixCanBeAdded()
    {
        $this->assertSame(Strings::prefix('there', 'hi'), 'hi there');
        $this->assertSame(Strings::prefix('friend how are you?', 'hello my'), 'hello my friend how are you?');
    }

    public function testASuffixCanBeAdded()
    {
        $this->assertSame(Strings::suffix('hi', 'there'), 'hi there');
    }
}