<?php

namespace Mediadevs\Validator\Tests\Unit\Filters\Date;

use Exception;
use PHPUnit\Framework\TestCase;
use Mediadevs\Validator\Filters\FilterInterface;

/**
 * @test Whether the given email provider exists, the provider will be pinged
 *       the email will be noted as valid when the correct http code is
 *       returned.
 *
 * Class EmailProviderExistsTest
 * @package Mediadevs\Validator\Tests\Unit\Filters\Email
 */
final class EmailProviderExistsTest extends TestCase
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
            /** TODO: Add valid values */
        ];
        $this->fixtures['valid']['thresholds'] = [
            /** TODO: Add valid thresholds */
        ];

        // These values should not pass the validation filter
        $this->fixtures['invalid']['values'] = [
            /** TODO: Add invalid values */
        ];
        $this->fixtures['invalid']['thresholds'] = [
            /** TODO: Add invalid thresholds */
        ];

        // The filter which will be applied in this test case
        $this->subject = new \Mediadevs\Validator\Filters\Email\EmailProviderExists;
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
