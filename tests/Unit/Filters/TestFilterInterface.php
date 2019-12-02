<?php

namespace Mediadevs\Validator\Tests\Unit\Filters;

interface TestFilterInterface
{
    /**
     * @test tests if the filter returns true if the data is correct.
     *
     * @return void
     */
    public function testValid(): void;

    /**
     * @test tests if the filter returns false if the data is incorrect.
     *
     * @return void
     */
    public function testInvalid(): void;
}
