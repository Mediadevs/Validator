<?php

namespace Mediadevs\Validator\Filters\Date;

use Mediadevs\Validator\Traits\ParsableTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class Between extends AbstractFilter implements FilterInterface
{
    use ParsableTrait;

    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'date_between';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'between_dates',
    );

    /**
     * Date\Between constructor.
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
        // Validating if value is between the two parameters, the order of the parameters doesn't matter.
        return ($this->values[0] > $this->parameters[0] && $this->values[0] < $this->parameters[1]) ||
            ($this->values[0] > $this->parameters[1] && $this->values[0] < $this->parameters[0]);
    }
}
