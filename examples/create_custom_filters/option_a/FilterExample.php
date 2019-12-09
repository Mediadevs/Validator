<?php

namespace Mediadevs\Validator\Examples\OptionA\Filters;

use Mediadevs\Validator\Traits\ParsableTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class FilterExample extends AbstractFilter implements FilterInterface
{
    use ParsableTrait;

    /**
     * The identifier for this filter, this will be used for calling the filter.
     *
     * @var string
     */
    public $identifier = 'my_custom_sanitization_filter';

    /**
     * The aliases for this filter, these are alternative identifiers for calling this filter.
     *
     * @var array
     */
    public $aliases = array(
        'my_custom_filter',
        'my_custom_sanitization',
        'my_sanitization_filter',
    );

    /**
     * The response message for your custom filter.
     *
     * @var string
     */
    public $message = array(
        'default'   => 'Field: {%attribute%} must apply to my custom filter, you\'ve entered: {%value%}!',
        'en_US'     => 'Field: {%attribute%} must apply to my custom filter, you\'ve entered: {%value%}!',
        'en_UK'     => 'Field: {%attribute%} must apply to my custom filter, you\'ve entered: {%value%}!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => '',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    );

    /**
     * ValidationFilterExample constructor.
     *
     * @param array $values
     * @param array $parameters
     */
    public function __construct(array $values, array $parameters = array())
    {
        parent::__construct($values, $parameters);
    }

    /**
     * Validating the assigned filter and returning whether it passes or not.
     *
     * @return bool
     */
    public function validate(): bool
    {
        return false;
    }
}
