<?php

namespace Mediadevs\Validator\Filters\Website;

use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class MAC extends AbstractFilter implements FilterInterface
{
    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'mac';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'mac_address',
    );

    /**
     * Website\Mac constructor.
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
        return filter_var($this->values[0], FILTER_VALIDATE_MAC);
    }
}
