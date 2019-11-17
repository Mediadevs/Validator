<?php

namespace Mediadevs\Validator\Filters;

/**
 * Interface FilterInterface
 * @package Mediadevs\Validator\Filters
 * @param   string $identifier
 * @param   array $aliases
 */
interface FilterInterface
{
    /**
     * FilterInterface constructor.
     * @param array $values
     * @param array $parameters
     */
    public function __construct(array $values, array $parameters = array());

    /**
     * Executing the logic for the filter
     * @return bool
     */
    public function validate(): bool;
}
