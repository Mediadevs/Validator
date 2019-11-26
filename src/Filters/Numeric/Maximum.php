<?php

namespace Mediadevs\Validator\Filters\Numeric;

use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class Maximum extends AbstractFilter implements FilterInterface
{
    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'maximum';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'max',
    );

    /**
     * Numeric\Maximum constructor.
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
        return $this->values[0] <= $this->parameters[0];
    }
}
