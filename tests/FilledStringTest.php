<?php

namespace Pinnacle\CommonValueObjects\Tests;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Pinnacle\CommonValueObjects\FilledString;

class FilledStringTest extends TestCase
{
    /**
     * @test
     */
    public function hasEmptyString_ThrowsException()
    {
        $this->expectException(InvalidArgumentException::class);
        new FilledString('');
    }

    /**
     * @test
     */
    public function hasStringWithSpaces_ThrowsException()
    {
        $this->expectException(InvalidArgumentException::class);
        new FilledString('          ');
    }

    /**
     * @test
     */
    public function hasStringWithContent_DoesNotThrowException()
    {
        $string = new FilledString('abc');
        $this->assertSame('abc', $string->getValue());
        $this->assertSame('abc', (string)$string);
    }

    /**
     * @test
     */
    public function hasStringWithContentAndSpaces_DoesNotThrowException()
    {
        $string = new FilledString('  abc  ');
        $this->assertSame('  abc  ', $string->getValue());
        $this->assertSame('  abc  ', (string)$string);
    }
}
