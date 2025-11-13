<?php

namespace Pinnacle\CommonValueObjects\Tests;

use PHPUnit\Framework\TestCase;
use Pinnacle\CommonValueObjects\FilledString;
use UnexpectedValueException;

/**
 * Class OffensiveWordSearcherTest
 */
class FilledStringTest extends TestCase
{
    /**
     * @test
     */
    public function hasEmptyString_ThrowsException()
    {
        $this->expectException(UnexpectedValueException::class);
        new FilledString('');
    }

    /**
     * @test
     */
    public function hasStringWithSpaces_ThrowsException()
    {
        $this->expectException(UnexpectedValueException::class);
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
}
