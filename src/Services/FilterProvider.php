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

        /*----[ File validation ]-------------------------------------------------------------------------------------*/
        \Mediadevs\Validator\Filters\File\AllowedFileExtensions::class,
        \Mediadevs\Validator\Filters\File\AllowedFileMimeTypes::class,
        \Mediadevs\Validator\Filters\File\MaximumFileSize::class,

        /*----[ Numeric validation ]----------------------------------------------------------------------------------*/
        \Mediadevs\Validator\Filters\Numeric\Between::class,
        \Mediadevs\Validator\Filters\Numeric\Equal::class,
        \Mediadevs\Validator\Filters\Numeric\GreaterThan::class,
        \Mediadevs\Validator\Filters\Numeric\GreaterThanOrEqualTo::class,
        \Mediadevs\Validator\Filters\Numeric\LessThan::class,
        \Mediadevs\Validator\Filters\Numeric\LessThanOrEqualTo::class,
        \Mediadevs\Validator\Filters\Numeric\Maximum::class,
        \Mediadevs\Validator\Filters\Numeric\Minimum::class,
        \Mediadevs\Validator\Filters\Numeric\NotEqual::class,

        /*----[ Payment validation ]----------------------------------------------------------------------------------*/
        \Mediadevs\Validator\Filters\Payment\CreditCard::class,
        \Mediadevs\Validator\Filters\Payment\IBAN::class,

        /*----[ String validation ]-----------------------------------------------------------------------------------*/
        \Mediadevs\Validator\Filters\String\Contains::class,
        \Mediadevs\Validator\Filters\String\EndsWith::class,
        \Mediadevs\Validator\Filters\String\ExactLength::class,
        \Mediadevs\Validator\Filters\String\MaximumLength::class,
        \Mediadevs\Validator\Filters\String\MinimumLength::class,
        \Mediadevs\Validator\Filters\String\StartsWith::class,

        /*----[ Website validation ]----------------------------------------------------------------------------------*/
        \Mediadevs\Validator\Filters\Website\Domain::class,
        \Mediadevs\Validator\Filters\Website\IP::class,
        \Mediadevs\Validator\Filters\Website\IPv4::class,
        \Mediadevs\Validator\Filters\Website\IPv6::class,
        \Mediadevs\Validator\Filters\Website\MAC::class,
        \Mediadevs\Validator\Filters\Website\ReachableAddress::class,
        \Mediadevs\Validator\Filters\Website\Url::class,
    );
}
