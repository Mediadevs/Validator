<?php

namespace Mediadevs\Validator\Filters\String;

use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class MaximumLength extends AbstractFilter implements FilterInterface
{
    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'maximum_length';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'max_length',
        'maxlen',
    );

    /**
     * String\MaximumLength constructor.
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
        return strlen($this->values[0]) <= $this->parameters[0];
    }
}
