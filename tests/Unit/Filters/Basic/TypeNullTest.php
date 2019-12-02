<?php

namespace Mediadevs\Validator\Tests\Unit\Filters\Basic;

use Exception;
use PHPUnit\Framework\TestCase;
use Mediadevs\Validator\Filters\FilterInterface;

/**
 * @test Whether the value type is null.
 *
 * Class TypeNullTest
 * @package Mediadevs\Validator\Tests\Unit\Filters\Basic
 */
final class TypeNullTest extends TestCase
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
    private $fixtures = array(
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

    /**
     * Setting up the subject class for this tests
     *
     * @return void
     */
    protected function setUp(): void
    {
        // These values should pass the validation filter
        $this->fixtures['valid']['values'] = [

        ];
        $this->fixtures['valid']['thresholds'] = [

        ];

        // These values should not pass the validation filter
        $this->fixtures['invalid']['values'] = [

        ];
        $this->fixtures['invalid']['thresholds'] = [

        ];

        // The filter which will be applied in this test case
        $this->subject = new \Mediadevs\Validator\Filters\Basic\TypeNull;
    }

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
