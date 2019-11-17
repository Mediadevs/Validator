<?php

namespace Mediadevs\Validator\Filters\File;

use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class AllowedFileMimeTypes extends AbstractFilter implements FilterInterface
{
    /**
     * The identifier for this filter
     * @var string
     */
    protected $identifier = 'allowed_file_mime_type';

    /**
     * The aliases for this filter
     * @var array
     */
    protected $aliases = array(
        'allowed_mime_type',
        'allowed_file_type',
        'file_mime_type',
    );

    /**
     * Filer\AllowedFileMimeTypes constructor.
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
        return in_array(mime_content_type($this->values[0]), $this->parameters);
    }
}
