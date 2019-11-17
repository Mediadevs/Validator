<?php


namespace Mediadevs\Validator;


use Mediadevs\Validator\Filters\FilterInterface;

class Validation
{
    /**
     * @var FilterInterface
     */
    protected $filter;

    /**
     * Validation constructor.
     *
     * @param FilterInterface $filter
     */
    public function __construct(FilterInterface $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Validating the assigned filter and returning output
     * @return string
     */
    public function validate(): string
    {
        return $this->filter->validate();
    }
}
