<?php

namespace Mediadevs\Validator\Factories;


use Mediadevs\Validator\Helpers\Registry;

class FilterFactory
{
    /**
     * Creating the factory and loading
     * @return array
     */
    public function build(string $filter, $values, array $thresholds = array()): array
    {
        Registry::getInstance();

        // Loading the Registry
        $filters = registry::getRegistry('filters', $filter);
        $aliases = registry::getRegistry('aliases', $filter);

        // The final class name of the registered item
        $class = $this->getFilter($filter, $filters, $aliases);

        // Executing the sanitization for the called sanitization class.
        return (bool) (new Validation(
            new $class($values, $thresholds)
        ))->validate();
    }
}
