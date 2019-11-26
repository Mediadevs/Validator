<?php

namespace Mediadevs\Validator;

use Mediadevs\Validator\Factories\FilterFactory;

class Validator
{
    /**
     * The $_POST request / data which should be validated is stored in here.
     *
     * @var array
     */
    private $request = array();

    /**
     * The filters with the applied thresholds.
     *
     * @var array
     */
    private $config = array();

    /**
     * The validation results will be stored in here.
     *
     * @var array
     */
    private $results = array();

    /**
     * Validator constructor.
     *
     * @param array $request
     * @param array $config
     */
    public function __construct(array $request, array $config = array())
    {
        // Binding properties
        $this->request = $request;
        $this->config = $config;
    }

    /**
     * Validating all the values and applying all the assigned filters.
     *
     * @return array
     */
    public function validate(): array
    {
        $factory = new FilterFactory();
        $arguments = new Arguments();

        // Parsing through all the fields
        foreach ($arguments->getArguments($this->config) as $config) {
            // Assigning the variables for the factory
            $filter = $config['filter'];
            $thresholds = $config['thresholds'];
            $field = $config['field'];

            // Making sure $values is an array
            $values = is_array($this->request[$field]) ? $this->request[$field] : array($this->request[$field]);

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
