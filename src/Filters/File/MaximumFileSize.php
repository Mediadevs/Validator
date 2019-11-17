<?php

namespace Mediadevs\Validator\Filters\File;

use Mediadevs\Validator\Filters\AbstractFilter;
use Mediadevs\Validator\Filters\FilterInterface;

class MaximumFileSize extends AbstractFilter implements FilterInterface
{
    /**
     * The identifier for this filter
     * @var string
     */
    protected $identifier = 'maximum_file_size';

    /**
     * The aliases for this filter
     * @var array
     */
    protected $aliases = array(
        'max_file_size',
        'maximum_size',
        'file_size',
        'max_size',
    );

    /**
     * Filer\MaximumFileSize constructor.
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
        return filesize($this->values[0]) <= $this->parameters[0];
    }
}
