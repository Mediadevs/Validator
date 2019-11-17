<?php

namespace Mediadevs\Validator\Filters\Email;

use Mediadevs\Validator\Traits\EmailTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class AllowedEmailProviders extends AbstractFilter implements FilterInterface
{
    use EmailTrait;

    /**
     * The identifier for this filter
     * @var string
     */
    protected $identifier = 'allowed_email_providers';

    /**
     * The aliases for this filter
     * @var array
     */
    protected $aliases = array(
        'allowed_providers',
        'email_allowed',
        'provider_allowed',
        'email_provider_allowed',
        'email_whitelist',
    );

    /**
     * Email\AllowedEmailProviders constructor.
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
        $domain = $this->extractDomainFromEmail($this->values[0]);

        return in_array($domain, $this->parameters);
    }
}
