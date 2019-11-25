<?php

namespace Mediadevs\Validator\Tests\Unit;

use Exception;
use PHPUnit\Framework\TestCase;

final class FilterDateTest extends TestCase
{
    /**
     * @test Whether the date is past the threshold date
     * @throws Exception
     */
    public function testAfter()
    {
        $date = time();

        // Testing valid
        $valid = strtotime('-1 year', time());
        $assertsTrue = (new \Mediadevs\Validator\Filters\Date\After([$valid], [$date]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = strtotime('+1 year', time());
        $assertsFalse = (new \Mediadevs\Validator\Filters\Date\After([$invalid], [$date]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the date is before the threshold date
     * @throws Exception
     */
    public function testBefore()
    {
        $date = time();

        // Testing valid
        $valid = strtotime('+1 year', time());
        $assertsTrue = (new \Mediadevs\Validator\Filters\Date\Before([$valid], [$date]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = strtotime('-1 year', time());
        $assertsFalse = (new \Mediadevs\Validator\Filters\Date\Before([$invalid], [$date]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the date is between the two threshold dates.
     *       The order of the Threshold date is not important.
     * @throws Exception
     */
    public function testBetween()
    {
        $date = time();

        // Testing valid
        $valid = [
            strtotime('-1 year', time()),
            strtotime( '+1 year', time()),
        ];
        $assertsTrue = (new \Mediadevs\Validator\Filters\Date\Between([$date], $valid))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = [
            strtotime('+1 year', time()),
            strtotime('+2 years', time()),
        ];
        $assertsFalse = (new \Mediadevs\Validator\Filters\Date\Before([$date], $invalid))->validate();
        $this->assertFalse($assertsFalse);
    }
}
