<?php

namespace Mediadevs\Validator\Filters\Host;

use Mediadevs\Validator\Traits\ParsableTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class IPv4 extends AbstractFilter implements FilterInterface
{
    use ParsableTrait;

    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'ipv4';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'ipv4_address',
    );

    /**
     * Website\IPv4 constructor.
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
        return filter_var($this->values[0], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
    }
}
