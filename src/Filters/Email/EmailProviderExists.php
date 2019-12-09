<?php

namespace Mediadevs\Validator\Filters\Email;

use Mediadevs\Validator\Traits\HostTrait;
use Mediadevs\Validator\Traits\EmailTrait;
use Mediadevs\Validator\Traits\ParsableTrait;
use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class EmailProviderExists extends AbstractFilter implements FilterInterface
{
    use HostTrait;
    use EmailTrait;
    use ParsableTrait;

    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'email_provider_exist';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'provider_exists',
    );

    /**
     * Email\EmailProviderExists constructor.
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
        $online = $this->checkWhetherHostIsLive($domain);

        return $online;
    }
}
