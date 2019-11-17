<?php

namespace Mediadevs\Validator\Filters\Basic;

use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;
use Mediadevs\Validator\Traits\RegularExpresionTrait;

class RegularExpression extends AbstractFilter implements FilterInterface
{
    use RegularExpresionTrait;

    /**
     * The identifier for this filter
     * @var string
     */
    protected $identifier = 'regular_expression';

    /**
     * The aliases for this filter
     * @var array
     */
    protected $aliases = array(
        'regex',
        'expression',
    );

    /**
     * Basic\RegularExpression constructor.
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
        $expressions = $this->generateRegularExpressionsOptionsArray($this->parameters);

        return filter_var($this->values[0], FILTER_VALIDATE_REGEXP, $expressions);
    }
}
