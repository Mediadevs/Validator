<?php

namespace Mediadevs\Validator\Filters\Basic;

use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class TypeNumeric extends AbstractFilter implements FilterInterface
{
    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'numeric';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'num',
    );

    /**
     * Basic\TypeNumeric constructor.
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
        return is_numeric($this->values[0]);
    }
}
