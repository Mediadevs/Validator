<?php

namespace Mediadevs\Validator\Filters\Basic;

use Mediadevs\Validator\Traits\ParsableTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class NotEqual extends AbstractFilter implements FilterInterface
{
    use ParsableTrait;

    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'not_equal';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'not_equal_to',
    );

    /**
     * Basic\NotEqual constructor.
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
        return $this->values[0] != $this->parameters[0];
    }
}
