<?php

namespace Mediadevs\Validator\Filters\Email;

use Mediadevs\Validator\Traits\EmailTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class Email extends AbstractFilter implements FilterInterface
{
    use EmailTrait;

    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'email';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'valid_email',
        'email_valid',
    );

    /**
     * Email\Email constructor.
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
        return filter_var($this->values[0], FILTER_VALIDATE_EMAIL);
    }
}
