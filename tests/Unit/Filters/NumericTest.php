<?php

namespace Mediadevs\Validator\Tests\Unit;

use Exception;
use PHPUnit\Framework\TestCase;

final class NumericTest extends TestCase
{
    /**
     * @test Whether the numeric value is between the two numeric threshold values.
     *       The order of the numeric threshold values is not important.
     *
     * @throws Exception
     */
    public function testBetween()
    {
        $thresholds = [1, 10];

        // Testing valid
        $valid = 5;
        $assertsTrue = (new \Mediadevs\Validator\Filters\Numeric\Between([$valid], $thresholds))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 15;
        $assertsFalse = (new \Mediadevs\Validator\Filters\Numeric\Between([$invalid], $thresholds))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the value is greater than the threshold
     *
     * @throws Exception
     */
    public function testGreaterThan()
    {
        $threshold = 10;

        // Testing valid
        $valid = 15;
        $assertsTrue = (new \Mediadevs\Validator\Filters\Numeric\GreaterThan([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 5;
        $assertsFalse = (new \Mediadevs\Validator\Filters\Numeric\GreaterThan([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the value is greater than or equal to the threshold
     *
     * @throws Exception
     */
    public function testGreaterThanOrEqualTo()
    {
        $threshold = 10;

        // Testing valid for greater than
        $valid = 15;
        $assertsTrue1 = (new \Mediadevs\Validator\Filters\Numeric\GreaterThanOrEqualTo(
            [$valid], [$threshold]
        ))->validate();
        $this->assertTrue($assertsTrue1);

        // Testing valid for equal to
        $valid = 10;
        $assertsTrue2 = (new \Mediadevs\Validator\Filters\Numeric\GreaterThanOrEqualTo(
            [$valid], [$threshold])
        )->validate();
        $this->assertTrue($assertsTrue2);

        // Testing Invalid
        $invalid = 5;
        $assertsFalse = (new \Mediadevs\Validator\Filters\Numeric\GreaterThanOrEqualTo(
            [$invalid], [$threshold]
        ))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the value is less than the threshold
     *
     * @throws Exception
     */
    public function testLessThan()
    {
        $threshold = 10;

        // Testing valid
        $valid = 5;
        $assertsTrue = (new \Mediadevs\Validator\Filters\Numeric\LessThan([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 15;
        $assertsFalse = (new \Mediadevs\Validator\Filters\Numeric\LessThan([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the value is less than or equal to the threshold
     *
     * @throws Exception
     */
    public function testLessThanOrEqualTo()
    {
        $threshold = 10;

        // Testing valid for greater than
        $valid = 5;
        $assertsTrue1 = (new \Mediadevs\Validator\Filters\Numeric\LessThanOrEqualTo(
            [$valid], [$threshold]
        ))->validate();
        $this->assertTrue($assertsTrue1);

        // Testing valid for equal to
        $valid = 10;
        $assertsTrue2 = (new \Mediadevs\Validator\Filters\Numeric\LessThanOrEqualTo(
            [$valid], [$threshold])
        )->validate();
        $this->assertTrue($assertsTrue2);

        // Testing Invalid
        $invalid = 15;
        $assertsFalse = (new \Mediadevs\Validator\Filters\Numeric\LessThanOrEqualTo(
            [$invalid], [$threshold]
        ))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the value is less than the maximum threshold
     *
     * @throws Exception
     */
    public function testMaximum()
    {
        $threshold = 10;

        // Testing valid
        $valid = 5;
        $assertsTrue = (new \Mediadevs\Validator\Filters\Numeric\Maximum([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 15;
        $assertsFalse = (new \Mediadevs\Validator\Filters\Numeric\Maximum([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the value is more than the minimum threshold
     *
     * @throws Exception
     */
    public function testMinimum()
    {
        $threshold = 10;

        // Testing valid
        $valid = 15;
        $assertsTrue = (new \Mediadevs\Validator\Filters\Numeric\Minimum([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 5;
        $assertsFalse = (new \Mediadevs\Validator\Filters\Numeric\Minimum([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }
}
