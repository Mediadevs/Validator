<?php

namespace Mediadevs\Validator\Tests\Unit\Filters\Basic;

use Exception;
use PHPUnit\Framework\TestCase;
use Mediadevs\Validator\Filters\FilterInterface;

/**
 * @test Whether the value is equal to the threshold.
 *
 * Class EqualTest
 * @package Mediadevs\Validator\Tests\Unit\Filters\Basic
 */
final class EqualTest extends TestCase
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
        10
    );

    /**
     * The input which should return invalid (FALSE)
     * @var array
     */
    private $invalid = array(
        1
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
        $this->subject = new \Mediadevs\Validator\Filters\Basic\Equal;
    }

    /**
     * @test Expects the results returned to be (TRUE)
     *
     * @throws Exception
     */
    public function testValid()
    {
        // Iterating through all the valid options
        foreach ($this->valid as $valid) {
            $this->assertTrue(
                ($this->subject)([$valid], $this->threshold)->validate()
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
        foreach ($this->invalid as $invalid) {
            $this->assertFalse(
                ($this->subject)([$invalid], $this->threshold)->validate()
            );
        }
    }
}
