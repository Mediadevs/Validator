<?php

namespace Mediadevs\Validator\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Mediadevs\Validator\Helpers\Registry;

final class RegistryTest extends TestCase
{
    /**
     * Whether registering a new filter works.
     */
    public function testNewRegistry()
    {
        Registry::getInstance();

        // Registering one of the test classes
        Registry::register([
            \Mediadevs\Validator\Examples\OptionA\Filters\FilterExample::class,
        ]);
    }
}
