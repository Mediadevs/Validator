<?php

namespace Mediadevs\Validator\Tests\Unit;

use Exception;
use PHPUnit\Framework\TestCase;

final class HostTest extends TestCase
{
    /**
     * @test Whether the string is a valid domain
     *
     * @throws Exception
     */
    public function testDomain()
    {
        // Testing valid
        $valid = 'mediadevs.nl';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Host\Domain([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = '';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Host\Domain([$invalid]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the string is a valid ip address
     *
     * @throws Exception
     */
    public function testValidIP()
    {
        // Testing valid
        $valid = '127.0.0.1';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Host\IP([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = '';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Host\IP([$invalid]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the string is a valid ipv4 address
     *
     * @throws Exception
     */
    public function testIPv4()
    {
        // Testing valid
        $valid = '127.0.0.1';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Host\IPv4([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = '';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Host\IPv4([$invalid]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the string is a valid ipv6 address
     *
     * @throws Exception
     */
    public function testIPv6()
    {
        // Testing valid
        $valid = '2001:0db8:0000:0000:0000:8a2e:0370:7334';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Host\IPv6([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = '';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Host\IPv6([$invalid]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the string is a valid mac address
     *
     * @throws Exception
     */
    public function testMAC()
    {
        // Testing valid
        $valid = '00:00:00:a1:2b:cc';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Host\MAC([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = '';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Host\MAC([$invalid]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the string is a reachable address
     *
     * @throws Exception
     */
    public function testReachableAddress()
    {
        // Testing valid
        $valid = 'mediadevs.nl';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Host\ReachableAddress([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = '';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Host\ReachableAddress([$invalid]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the string is an url
     *
     * @throws Exception
     */
    public function testUrl()
    {
        // Testing valid
        $valid = 'https://mediadevs.nl/';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Host\Url([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = '';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Host\Url([$invalid]))->validate();
        $this->assertFalse($assertsFalse);
    }
}
