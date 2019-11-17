<?php

namespace Mediadevs\Validator\Filters\Basic;

use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class TypeArray extends AbstractFilter implements FilterInterface
{
    /**
     * The identifier for this filter
     * @var string
     */
    protected $identifier = 'array';

    /**
     * The aliases for this filter
     * @var array
     */
    protected $aliases = array();

    /**
     * Basic\TypeArray constructor.
     * @param array $values
     * @param array $parameters
     */
    public function __construct(array $values, array $parameters = [])
    {
        parent::__construct($values, $parameters);
    }

    /**
     * Executing the logic for the filter
     * @return bool
     */
    public function validate(): bool
    {
        return is_array($this->values[0]);
    }
}
