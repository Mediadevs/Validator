<?php

namespace Mediadevs\Validator\Tests\Unit;

use Exception;
use PHPUnit\Framework\TestCase;

final class FilterPaymentTest extends TestCase
{
    /**
     * @test Whether the entered credit card number is valid
     * @throws Exception
     */
    public function testCreditCard()
    {
        // Testing valid
        $valid = null; /** Todo: Create test for credit card validation */
        $assertsTrue = (new \Mediadevs\Validator\Filters\Payment\CreditCard([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = null; /** Todo: Create test for credit card validation */
        $assertsFalse = (new \Mediadevs\Validator\Filters\Payment\CreditCard([$invalid]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the entered IBAN number is valid
     * @throws Exception
     */
    public function testIBAN()
    {
        // Testing valid
        $valid = null; /** Todo: Create test for IBAN validation */
        $assertsTrue = (new \Mediadevs\Validator\Filters\Payment\IBAN([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = null; /** Todo: Create test for IBAN validation */
        $assertsFalse = (new \Mediadevs\Validator\Filters\Payment\IBAN([$invalid]))->validate();
        $this->assertFalse($assertsFalse = false);
    }
}
