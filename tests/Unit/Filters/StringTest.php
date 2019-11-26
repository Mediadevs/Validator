<?php

namespace Mediadevs\Validator\Tests\Unit;

use Exception;
use PHPUnit\Framework\TestCase;

final class StringTest extends TestCase
{
    /**
     * @test Whether the string contains the threshold
     *
     * @throws Exception
     */
    public function testContains()
    {
        $threshold = 'Wor';

        // Testing valid
        $valid = 'Hello World';
        $assertsTrue = (new \Mediadevs\Validator\Filters\String\Contains([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 'Hello Moon!';
        $assertsFalse = (new \Mediadevs\Validator\Filters\String\Contains([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the string ends with the given threshold
     *
     * @throws Exception
     */
    public function testEndsWith()
    {
        $threshold = 'rld!';

        // Testing valid
        $valid = 'Hello World!';
        $assertsTrue = (new \Mediadevs\Validator\Filters\String\EndsWith([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 'Hello Moon!';
        $assertsFalse = (new \Mediadevs\Validator\Filters\String\EndsWith([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the string has an exact length which is equal to the threshold
     *
     * @throws Exception
     */
    public function testExactLength()
    {
        $threshold = 12;

        // Testing valid
        $valid = 'Hello World!';
        $assertsTrue = (new \Mediadevs\Validator\Filters\String\ExactLength([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 'Hello Moon!';
        $assertsFalse = (new \Mediadevs\Validator\Filters\String\ExactLength([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the string contains less characters than given threshold
     *
     * @throws Exception
     */
    public function testMaximumLength()
    {
        $threshold = 11;

        // Testing valid
        $valid = 'Hello Moon!';
        $assertsTrue = (new \Mediadevs\Validator\Filters\String\MaximumLength([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 'Hello World!';
        $assertsFalse = (new \Mediadevs\Validator\Filters\String\MaximumLength([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the string contains more characters than given threshold
     *
     * @throws Exception
     */
    public function testMinimumLength()
    {
        $threshold = 12;

        // Testing valid
        $valid = 'Hello World!';
        $assertsTrue = (new \Mediadevs\Validator\Filters\String\MinimumLength([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 'Hello Moon!';
        $assertsFalse = (new \Mediadevs\Validator\Filters\String\MinimumLength([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the string starts with the given threshold
     *
     * @throws Exception
     */
    public function testStartsWith()
    {
        $threshold = 'Hel';

        // Testing valid
        $valid = 'Hello World!';
        $assertsTrue = (new \Mediadevs\Validator\Filters\String\StartsWith([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 'Bye Moon!';
        $assertsFalse = (new \Mediadevs\Validator\Filters\String\StartsWith([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }
}
