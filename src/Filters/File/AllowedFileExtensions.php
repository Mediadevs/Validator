<?php

namespace Mediadevs\Validator\Filters\File;

use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class AllowedFileExtensions extends AbstractFilter implements FilterInterface
{
    /**
     * The identifier for this filter.
     *
     * @var string
     */
    protected $identifier = 'allowed_file_extensions';

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    protected $aliases = array(
        'allowed_extensions',
        'file_extensions',
    );

    /**
     * File\AllowedFileExtensions constructor.
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
        return in_array(pathinfo($this->values[0], PATHINFO_EXTENSION), $this->parameters);
    }
}
