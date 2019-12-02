<?php

namespace Mediadevs\Validator\Tests\Unit\Filters\Numeric;

use Exception;
use PHPUnit\Framework\TestCase;
use Mediadevs\Validator\Filters\FilterInterface;

/**
 * @test Whether the value is greater than or equal to the threshold.
 *
 * Class GreaterThanOrEqualToTest
 * @package Mediadevs\Validator\Tests\Unit\Filters\Numeric
 */
final class GreaterThanOrEqualToTest extends TestCase
{
    /**
     * The filter test subject
     * @var FilterInterface
     */
    private $subject;

    /**
     * The fixtures for this validation filter test
     * @var array
     */
    private $fixtures = array();

    /**
     * Setting up the subject class for this tests
     *
     * @return void
     */
    protected function setUp(): void
    {
        /**
         * @var $fixtures
         */
        $this->fixtures = array(
            // Valid fixtures these should return (TRUE) after validation
            'valid'     => array(
                'values'        => array(15, 10),
                'thresholds'    => array(10),
            ),
            // Invalid fixtures these should return (FALSE) after validation
            'invalid'   => array(
                'values'        => array(5),
                'thresholds'    => array(10),
            )
        );

        // The filter which will be applied in this test case
        $this->subject = \Mediadevs\Validator\Filters\Numeric\GreaterThanOrEqualTo::class;
    }

    /**
     * @test Expects the results returned to be (TRUE)
     *
     * @throws Exception
     *
     * @return void
     */
    public function testValid(): void
    {
        // Iterating through all the valid options
        foreach ($this->fixtures['valid']['values'] as $valid) {
            $this->assertTrue(
                (new $this->subject([$valid], $this->fixtures['valid']['thresholds']))->validate()
            );
        }
    }

    /**
     * @test Expects the results returned to be (FALSE)
     *
     * @throws Exception
     *
     * @return void
     */
    public function testInvalid(): void
    {
        // Iterating through all the invalid options
        foreach ($this->fixtures['invalid']['values'] as $invalid) {
            $this->assertFalse(
                (new $this->subject([$invalid], $this->fixtures['invalid']['thresholds']))->validate()
            );
        }
    }
}
