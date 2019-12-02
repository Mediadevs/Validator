<?php

namespace Mediadevs\Validator\Tests\Unit\Filters\Basic;

use Exception;
use PHPUnit\Framework\TestCase;
use Mediadevs\Validator\Filters\FilterInterface;

/**
 * @test Whether the value is not equal to the threshold.
 *
 * Class NotEqualTest
 * @package Mediadevs\Validator\Tests\Unit\Filters\Basic
 */
final class NotEqualTest extends TestCase
{
    /**
     * The filter test subject
     * @var FilterInterface
     */
    private $subject;

    /**
     * The input which should return valid (TRUE)
     * @var array
     */
    private $valid = array(
        1
    );

    /**
     * The input which should return invalid (FALSE)
     * @var array
     */
    private $invalid = array(
        10
    );

    /**
     * The thresholds which will be used for validation
     * @var array
     */
    private $threshold = array(
        10
    );

    /**
     * Setting up the subject class for this tests
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->subject = new \Mediadevs\Validator\Filters\Basic\NotEqual;
    }

    /**
     * @test Expects the results returned to be (TRUE)
     *
     * @throws Exception
     */
    public function testValid()
    {
        $this->assertTrue(
            ($this->subject)($this->valid, $this->threshold)->validate()
        );
    }

    /**
     * @test Expects the results returned to be (FALSE)
     *
     * @throws Exception
     */
    public function testInvalid()
    {
        $this->assertFalse(
            ($this->subject)($this->invalid, $this->threshold)->validate()
        );
    }
}
