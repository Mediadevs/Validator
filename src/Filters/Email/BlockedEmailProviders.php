<?php

namespace Mediadevs\Validator\Filters\Email;

use Mediadevs\Validator\Traits\EmailTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class BlockedEmailProviders extends AbstractFilter implements FilterInterface
{
    use EmailTrait;

    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'blocked_email_providers';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'blocked_providers',
        'email_blocked',
        'provider_blocked',
        'email_provider_blocked',
        'email_blacklist',
    );

    /**
     * Email\BlockedEmailProviders constructor.
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
        $domain = $this->extractDomainFromEmail($this->values[0]);

        // Its the same as "AllowedEmailProviders" but then reversed.
        return !in_array($domain, $this->parameters);
    }
}
