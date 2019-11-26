<?php

namespace Mediadevs\Validator\Filters\Host;

use Mediadevs\Validator\Traits\HostTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class ReachableAddress extends AbstractFilter implements FilterInterface
{
    use HostTrait;

    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'reachable_address';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'website_live',
        'test_host',
    );

    /**
     * Website\Domain constructor.
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
        return $this->checkWhetherHostIsLive($this->values[0]);
    }
}
