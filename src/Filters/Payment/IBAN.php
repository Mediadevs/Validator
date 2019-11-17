<?php

namespace Mediadevs\Validator\Filters\Payment;

use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class IBAN extends AbstractFilter implements FilterInterface
{
    /**
     * The identifier for this filter
     * @var string
     */
    protected $identifier = 'iban';

    /**
     * The aliases for this filter
     * @var array
     */
    protected $aliases = array();

    /**
     * Payment\IBAN constructor.
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
        // TODO: Implement validate() method.
    }
}
