<?php

namespace Mediadevs\Validator\Traits;

trait ParsableTrait
{
    /**
     * Collecting the defined property from the child class.
     *
     * @param string $property
     *
     * @return string
     */
    public function getProperty(string $property): string
    {
        return $this->$property;
    }
}
