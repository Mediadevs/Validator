<?php

namespace Mediadevs\Validator\Tests\Unit\Filters\Email;

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
        $this->subject = new \Mediadevs\Validator\Filters\Email\EmailProviderExists;
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