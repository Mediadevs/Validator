<?php

namespace Mediadevs\Validator\Filters\String;

use Mediadevs\Validator\Traits\ParsableTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class MinimumLength extends AbstractFilter implements FilterInterface
{
    use ParsableTrait;

    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'minimum_length';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'min_length',
        'minlen',
    );

    /**
     * String\MinimumLength constructor.
     *
     * @param array $values
     * @param array $parameters
     */
    public function __construct(array $values, array $parameters = [])
    {
        parent::__construct($values, $parameters);
    }

    /**
     * Executing the logic for the filter.
     *
     * @return bool
     */
    public function validate(): bool
    {
        return strlen($this->values[0]) >= $this->parameters[0];
    }
}
