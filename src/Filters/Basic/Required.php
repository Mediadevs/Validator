<?php

namespace Mediadevs\Validator\Filters\Basic;

use Mediadevs\Validator\Traits\ParsableTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class Required extends AbstractFilter implements FilterInterface
{
    use ParsableTrait;

    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'required';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'req',
    );

    /**
     * Basic\Required constructor.
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
        // Validating whether the field actually exists
        if (isset($this->values[0])) {
            // Validating whether the value of the field is identical to false
            if ($this->values[0] === false) {
                return true;
            }

            // Validating whether the value of the field is identical to 0
            if ($this->values[0] === 0) {
                return true;
            }

            // Validating whether the value of the field is identical to 0.0
            if ($this->values[0] === 0.0) {
                return true;
            }

            // Validating whether the value of the field is identical to '0'
            if ($this->values[0] === '0') {
                return true;
            }

            // Validating whether the value of the field has not the length of 0
            if (strlen($this->values[0]) !== 0) {
                return true;
            }

            // Validating whether the value is set and is not empty
            if (!empty($this->values[0])) {
                return true;
            }
        }

        // The first statement was false and one of the other statements.
        return false;
    }
}
