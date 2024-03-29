<?php

namespace Mediadevs\Validator\Factories;

use ReflectionException;
use Mediadevs\Validator\Validation;
use Mediadevs\Validator\Helpers\Registry;

class FilterFactory
{
    /**
     * Applying the filter with the thresholds to the values.
     *
     * @param string $filter
     * @param array  $values
     * @param array  $thresholds
     *
     * @throws ReflectionException
     *
     * @return bool
     */
    public function build(string $filter, array $values, array $thresholds = array()): bool
    {
        // Loading the Registry
        $class = (new Registry())->getRegistry('filter', $filter);

        // Executing the sanitization for the called sanitization class.
        return (bool) (new Validation(
            new $class($values, $thresholds)
        ))->validate();
    }
}
