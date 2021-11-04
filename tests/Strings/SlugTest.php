<?php

namespace App\Tests\Strings;

use PHPUnit\Framework\TestCase;
use App\String\Strings;

final class SlugTest extends TestCase
{
    public function testItWorks()
    {
        self::assertTrue(true);
    }

    public function testAStringCanBeSlugged()
    {
        $this->assertSame(Strings::slug('I am okay'), 'i-am-okay');

        $this->assertEquals('this-is-a-string', Strings::slug('this-is-a-string'), 'String is the same');
    }
}