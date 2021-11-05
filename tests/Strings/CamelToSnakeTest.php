<?php

namespace App\Tests\Strings;

use AbdellahRamadan\String\Strings;
use PHPUnit\Framework\TestCase;

class CamelToSnakeTest extends TestCase
{
    public function testATextCanBeConvertedFromCamelToSnakeCase()
    {
        $this->assertSame(Strings::camelToSnakeCase('Camel to snake case'), 'camel_to_snake_case');
    }
}