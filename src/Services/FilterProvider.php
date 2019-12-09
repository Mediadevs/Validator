<?php

namespace Mediadevs\Validator\Services;

class FilterProvider
{
    /**
     * The filters / providers for the Validator package
     * The classes are grouped by validation type and sorted alphabetically.
     *
     * @var array
     */
    public $providers = array(
        /*----[ Basic validation ]------------------------------------------------------------------------------------*/
        \Mediadevs\Validator\Filters\Basic\Equal::class,
        \Mediadevs\Validator\Filters\Basic\NotEqual::class,
        \Mediadevs\Validator\Filters\Basic\RegularExpression::class,
        \Mediadevs\Validator\Filters\Basic\Required::class,
        \Mediadevs\Validator\Filters\Basic\TypeArray::class,
        \Mediadevs\Validator\Filters\Basic\TypeBoolean::class,
        \Mediadevs\Validator\Filters\Basic\TypeFloat::class,
        \Mediadevs\Validator\Filters\Basic\TypeInteger::class,
        \Mediadevs\Validator\Filters\Basic\TypeNull::class,
        \Mediadevs\Validator\Filters\Basic\TypeNumeric::class,
        \Mediadevs\Validator\Filters\Basic\TypeString::class,

        /*----[ Date validation ]-------------------------------------------------------------------------------------*/
        \Mediadevs\Validator\Filters\Date\After::class,
        \Mediadevs\Validator\Filters\Date\Before::class,
        \Mediadevs\Validator\Filters\Date\Between::class,

        /*----[ Email validation ]------------------------------------------------------------------------------------*/
        \Mediadevs\Validator\Filters\Email\AllowedEmailProviders::class,
        \Mediadevs\Validator\Filters\Email\BlockedEmailProviders::class,
        \Mediadevs\Validator\Filters\Email\Email::class,
        \Mediadevs\Validator\Filters\Email\EmailProviderExists::class,

        /*----[ Host validation ]-------------------------------------------------------------------------------------*/
        \Mediadevs\Validator\Filters\Host\Domain::class,
        \Mediadevs\Validator\Filters\Host\IP::class,
        \Mediadevs\Validator\Filters\Host\IPv4::class,
        \Mediadevs\Validator\Filters\Host\IPv6::class,
        \Mediadevs\Validator\Filters\Host\MAC::class,
        \Mediadevs\Validator\Filters\Host\ReachableAddress::class,
        \Mediadevs\Validator\Filters\Host\Url::class,

        /*----[ Numeric validation ]----------------------------------------------------------------------------------*/
        \Mediadevs\Validator\Filters\Numeric\Between::class,
        \Mediadevs\Validator\Filters\Numeric\GreaterThan::class,
        \Mediadevs\Validator\Filters\Numeric\GreaterThanOrEqualTo::class,
        \Mediadevs\Validator\Filters\Numeric\LessThan::class,
        \Mediadevs\Validator\Filters\Numeric\LessThanOrEqualTo::class,
        \Mediadevs\Validator\Filters\Numeric\Maximum::class,
        \Mediadevs\Validator\Filters\Numeric\Minimum::class,

        /*----[ String validation ]-----------------------------------------------------------------------------------*/
        \Mediadevs\Validator\Filters\String\Contains::class,
        \Mediadevs\Validator\Filters\String\EndsWith::class,
        \Mediadevs\Validator\Filters\String\ExactLength::class,
        \Mediadevs\Validator\Filters\String\MaximumLength::class,
        \Mediadevs\Validator\Filters\String\MinimumLength::class,
        \Mediadevs\Validator\Filters\String\StartsWith::class,
    );
}
