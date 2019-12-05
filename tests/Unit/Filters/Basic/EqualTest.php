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
                'values'        => array(10),
                'thresholds'    => array(10),
            ),
            // Invalid fixtures these should return (FALSE) after validation
            'invalid'   => array(
                'values'        => array(1),
                'thresholds'    => array(10),
            )
        );

        // The filter which will be applied in this test case
        $this->subject = \Mediadevs\Validator\Filters\Basic\Equal::class;
    }

    /**
     * @test Expects the results returned to be (TRUE)
     * @testdox Whether [Basic\Equal] will pass the validation with the correct input.
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
     * @testdox Whether [Basic\Equal] will fail the validation with the incorrect input.
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
