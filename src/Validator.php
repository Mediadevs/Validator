<?php

namespace Mediadevs\Validator;

use Mediadevs\Validator\Helpers\Arguments;
use Mediadevs\Validator\Factories\FilterFactory;

class Validator
{
    /**
     * The validation results will be stored in here.
     *
     * @var array
     */
    private $results = array();

    /**
     * Validating all the values and applying all the assigned filters.
     *
     * @param array $request
     * @param array $configuration
     *
     * @return array
     */
    public function validate(array $request, array $configuration = array()): array
    {
        $factory = new FilterFactory();
        $arguments = new Arguments();

        // Parsing through all the fields
        foreach ($arguments->getArguments($configuration) as $config) {
            // Assigning the variables for the factory
            $filter = $config['filter'];
            $thresholds = $config['thresholds'];
            $field = $config['field'];

            // Making sure $values is an array
            $values = is_array($request[$field]) ? $request[$field] : array($request[$field]);

            // Getting the configuration for the filter
            $results = $factory->build($filter, $values, $thresholds);

            // Creating a validation config for the current operation
            $this->results[] = [
                'valid'         => (bool) $results,
                'field'         => (string) $field,
                'filter'        => (string) $filter,
                'values'        => (array) $values,
                'thresholds'    => (array) $thresholds,
            ];
        }

        return $this->results;
    }
}
