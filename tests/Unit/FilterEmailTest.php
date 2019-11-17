<?php

namespace Mediadevs\Validator\Tests\Unit;

use PHPUnit\Framework\TestCase;

final class FilterEmailTest extends TestCase
{
    /**
     * @test Whether the email is in the list of allowed providers
     * @throws \Exception
     */
    public function testAllowedEmailProviders()
    {
        $email = 'test@mediadevs.nl';

        // Testing valid
        $valid = [
            'mediadevs.nl',
        ];
        $assertsTrue = (new \Mediadevs\Validator\Filters\Email\AllowedEmailProviders([$email], $valid))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = [
            'outlook.com',
            'hotmail.com',
            'gmail.com',
        ];
        $assertsFalse = (new \Mediadevs\Validator\Filters\Email\AllowedEmailProviders([$email], $invalid))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the email is in the list of blocked providers
     * @throws \Exception
     */
    public function testBlockedEmailProviders()
    {
        $email = 'test@mediadevs.nl';

        // Testing valid
        $valid = [
            'outlook.com',
            'hotmail.com',
            'gmail.com',
        ];
        $assertsTrue = (new \Mediadevs\Validator\Filters\Email\BlockedEmailProviders([$email], $valid))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = [
            'mediadevs.nl',
        ];
        $assertsFalse = (new \Mediadevs\Validator\Filters\Email\BlockedEmailProviders([$email], $invalid))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the given string is a valid email address
     * @throws \Exception
     */
    public function testEmail()
    {
        // Testing valid
        $valid = 'test@mediadevs.nl';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Email\Email([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 'test-at-mediadevs.nl';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Email\Email([$invalid]))->validate();
        $this->assertFalse($assertsFalse);
    }


    /**
     * @test Whether the given email provider exists, the provider will be pinged
     *       the email will be noted as valid when the correct http code is returned
     * @throws \Exception
     */
    public function testEmailProviderExists()
    {
        // Testing valid
        $valid = 'test@mediadevs.nl';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Email\EmailProviderExists([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 'test-at-mediadevs.nl';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Email\EmailProviderExists([$invalid]))->validate();
        $this->assertFalse($assertsFalse);

    }
}
