<?php

namespace Mediadevs\Validator\Tests\Unit\Filters\Basic;

use Exception;
use PHPUnit\Framework\TestCase;
use Mediadevs\Validator\Filters\FilterInterface;

/**
 * @test Whether the value type is an integer.
 *
 * Class TypeIntegerTest
 * @package Mediadevs\Validator\Tests\Unit\Filters\Basic
 */
final class TypeIntegerTest extends TestCase
{
    /**
     * @test Expects the results returned to be (TRUE)
     *
     * @throws Exception
     */
    public function testValid()
    {
        // Iterating through all the valid options
        foreach ($this->fixtures['valid']['values'] as $valid) {
            $this->assertTrue(
                ($this->subject)($valid, $this->fixtures['valid']['thresholds'])->validate()
            );
        }
    }

    /**
     * @test Expects the results returned to be (FALSE)
     *
     * @throws Exception
     */
    public function testInvalid()
    {
        // Iterating through all the invalid options
        foreach ($this->fixtures['invalid']['values'] as $invalid) {
            $this->assertFalse(
                ($this->subject)($invalid, $this->fixtures['invalid']['thresholds'])->validate()
            );
        }
    }
}
