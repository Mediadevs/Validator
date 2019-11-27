<?php

namespace Mediadevs\Validator\Tests\Unit;

use Exception;
use PHPUnit\Framework\TestCase;

final class BasicTest extends TestCase
{
    /**
     * @test Whether the value is equal to the threshold
     *
     * @throws Exception
     */
    public function testEqual()
    {
        $threshold = 10;

        // Testing valid
        $valid = 10;
        $assertsTrue = (new \Mediadevs\Validator\Filters\Basic\Equal([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 1;
        $assertsFalse = (new \Mediadevs\Validator\Filters\Basic\Equal([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the value is not equal to the threshold
     *
     * @throws Exception
     */
    public function testNotEqual()
    {
        $threshold = 10;

        // Testing valid
        $valid = 15;
        $assertsTrue = (new \Mediadevs\Validator\Filters\Basic\NotEqual([$valid], [$threshold]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 10;
        $assertsFalse = (new \Mediadevs\Validator\Filters\Basic\NotEqual([$invalid], [$threshold]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the value matches the regular expression pattern
     *
     * @throws Exception
     */
    public function testRegularExpression()
    {
        // Current test
        $pattern = '/[A-z].*/';

        // Testing valid
        $valid = 'Hello World!';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Basic\RegularExpression([$valid], [$pattern]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = '123456';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Basic\RegularExpression([$invalid], [$pattern]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the field is set
     *
     * @throws Exception
     */
    public function testRequired()
    {
        // Testing valid
        /*
         * Test string
         */
        $valid = 'Hello World!';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Basic\Required([$valid]))->validate();
        $this->assertTrue($assertsTrue);
        /*
         * Test bool
         */
        $valid = false;
        $assertsTrue = (new \Mediadevs\Validator\Filters\Basic\Required([$valid]))->validate();
        $this->assertTrue($assertsTrue);
        /*
         * Test numeric
         */
        $valid = 0;
        $assertsTrue = (new \Mediadevs\Validator\Filters\Basic\Required([$valid]))->validate();
        $this->assertTrue($assertsTrue);
        /*
         * Test float
         */
        $valid = 0.0;
        $assertsTrue = (new \Mediadevs\Validator\Filters\Basic\Required([$valid]))->validate();
        $this->assertTrue($assertsTrue);
        /*
         * Test numeric string
         */
        $valid = '0';
        $assertsTrue = (new \Mediadevs\Validator\Filters\Basic\Required([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = '';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Basic\Required([$invalid]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * @test Whether the value type is an array
     *
     * @throws Exception
     */
    public function testArray()
    {
        // Testing valid
        $valid = array();
        $assertTrue = (new \Mediadevs\Validator\Filters\Basic\TypeArray([$valid]))->validate();
        $this->assertTrue($assertTrue);

        // Testing Invalid
        $invalid = '';
        $assertFalse = (new \Mediadevs\Validator\Filters\Basic\TypeArray([$invalid]))->validate();
        $this->assertFalse($assertFalse);
    }

    /**
     * Whether the value type is a boolean.
     *
     * @throws Exception
     */
    public function testBoolean()
    {
        // Testing valid
        $valid = true;
        $assertsTrue = (new \Mediadevs\Validator\Filters\Basic\TypeBoolean([$valid]))->validate();
        $this->assertTrue($assertsTrue);

        // Testing Invalid
        $invalid = 'Hello World!';
        $assertsFalse = (new \Mediadevs\Validator\Filters\Basic\TypeBoolean([$invalid]))->validate();
        $this->assertFalse($assertsFalse);
    }

    /**
     * Whether the value type is a float.
     *
     * @throws Exception
     */
    public function testFloat()
    {
        // Testing valid
        $valid = 27.25;
        $assertTrue = (new \Mediadevs\Validator\Filters\Basic\TypeFloat([$valid]))->validate();
        $this->assertTrue($assertTrue);

        // Testing Invalid
        $invalid = 'string';
        $assertFalse = (new \Mediadevs\Validator\Filters\Basic\TypeFloat([$invalid]))->validate();
        $this->assertFalse($assertFalse);
    }

    /**
     * Whether the value type is an integer.
     *
     * @throws Exception
     */
    public function testInteger()
    {
        // Testing valid
        $valid = 10;
        $assertTrue = (new \Mediadevs\Validator\Filters\Basic\TypeInteger([$valid]))->validate();
        $this->assertTrue($assertTrue);

        // Testing Invalid
        $invalid = 'string';
        $assertFalse = (new \Mediadevs\Validator\Filters\Basic\TypeInteger([$invalid]))->validate();
        $this->assertFalse($assertFalse);
    }

    /**
     * Whether the value type is null.
     *
     * @throws Exception
     */
    public function testNull()
    {
        // Testing valid
        $valid = null;
        $assertTrue = (new \Mediadevs\Validator\Filters\Basic\TypeNull([$valid]))->validate();
        $this->assertTrue($assertTrue);

        // Testing Invalid
        $invalid = 0;
        $assertFalse = (new \Mediadevs\Validator\Filters\Basic\TypeNull([$invalid]))->validate();
        $this->assertFalse($assertFalse);
    }

    /**
     * Whether the value type is numeric.
     *
     * @throws Exception
     */
    public function testNumeric()
    {
        // Testing valid
        $valid = 0;
        $assertTrue = (new \Mediadevs\Validator\Filters\Basic\TypeNumeric([$valid]))->validate();
        $this->assertTrue($assertTrue);

        // Testing Invalid
        $invalid = 'string';
        $assertFalse = (new \Mediadevs\Validator\Filters\Basic\TypeNumeric([$invalid]))->validate();
        $this->assertFalse($assertFalse);
    }

    public function testString()
    {
        // Testing valid
        $valid = 'string';
        $assertTrue = (new \Mediadevs\Validator\Filters\Basic\TypeString([$valid]))->validate();
        $this->assertTrue($assertTrue);

        // Testing Invalid
        $invalid = 0;
        $assertFalse = (new \Mediadevs\Validator\Filters\Basic\TypeString([$invalid]))->validate();
        $this->assertFalse($assertFalse);
    }
}
