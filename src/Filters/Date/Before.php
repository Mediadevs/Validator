<?php

namespace Mediadevs\Validator\Filters\Date;

use Mediadevs\Validator\Traits\ParsableTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class Before extends AbstractFilter implements FilterInterface
{
    use ParsableTrait;

    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'date_before';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'before_date',
        'post_date',
    );

    /**
     * Date\Before constructor.
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
        return !($this->values[0] < $this->parameters[0]);
    }
}
