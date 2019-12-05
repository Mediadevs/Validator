<?php

namespace Mediadevs\Validator\Tests\Unit\Filters\File;

use Exception;
use PHPUnit\Framework\TestCase;
use Mediadevs\Validator\Filters\FilterInterface;

/**
 * @test Whether the file mime type is in the list of allowed mime types.
 *
 * Class AllowedFileMimeTypesTest
 *
 * @package Mediadevs\Validator\Tests\Unit\Filters\File
 */
final class AllowedFileMimeTypesTest extends TestCase
{
    /**
     * The filter test subject.
     *
     * @var FilterInterface
     */
    private $subject;

    /**
     * The fixtures for this validation filter test.
     *
     * @var array
     */
    private $fixtures = array();

    /**
     * Setting up the subject class for this tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

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
            ),
        );

        // The filter which will be applied in this test case
        $this->subject = \Mediadevs\Validator\Filters\File\AllowedFileMimeTypes::class;
    }

    /**
     * @test Expects the results returned to be (TRUE).
     * @testdox Whether [File\AllowedFileMimeTypes] will pass the validation with the correct input.
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
     * @test Expects the results returned to be (FALSE).
     * @testdox Whether [File\AllowedFileMimeTypes] will fail the validation with the incorrect input.
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

    /**
     * Tearing down the test and clearing cache.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->subject, $this->fixtures);

        parent::tearDown();
    }
}
