<?php

namespace Mediadevs\Validator\Tests\Unit\Filters\Numeric;

use Exception;
use PHPUnit\Framework\TestCase;
use Mediadevs\Validator\Filters\FilterInterface;

/**
 * @testWhether the value is less than or equal to the threshold.
 *
 * Class LessThanOrEqualToTest
 * @package Mediadevs\Validator\Tests\Unit\Filters\Numeric
 */
final class LessThanOrEqualToTest extends TestCase
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
         * TODO: Enter data for the fixtures
         * @var $fixtures
         */
        $this->fixtures = array(
            // Valid fixtures these should return (TRUE) after validation
            'valid'     => array(
                'values'        => array(),
                'thresholds'    => array(),
            ),
            // Invalid fixtures these should return (FALSE) after validation
            'invalid'   => array(
                'values'        => array(),
                'thresholds'    => array(),
            )
        );

        // The filter which will be applied in this test case
        $this->subject = new \Mediadevs\Validator\Filters\Numeric\LessThanOrEqualTo(array(), array());
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
                ($this->subject)($valid, $this->fixtures['valid']['thresholds'])->validate()
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
                ($this->subject)($invalid, $this->fixtures['invalid']['thresholds'])->validate()
            );
        }
    }
}
