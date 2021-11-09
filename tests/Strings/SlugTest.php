<?php

namespace App\Tests\Strings;

use PHPUnit\Framework\TestCase;
use AbdellahRamadan\String\Strings;

final class SlugTest extends TestCase
{
    public function testItWorks()
    {
        self::assertTrue(true);
    }

    public function testAStringCanBeSlugged()
    {
        $this->assertSame(Strings::slug('I am okay'), 'i-am-okay');

        $this->assertSame( Strings::slug('this-is-a-string'), 'this-is-a-string');
    }
}