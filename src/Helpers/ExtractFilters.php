<?php

namespace Mediadevs\Validator\Helpers;

use Mediadevs\Validator\Filters\FilterInterface;

class ExtractFilters
{
    /**
     * The target filter will be instantiated and stored in here.
     * @var FilterInterface
     */
    private $subject;

    /**
     * The identifiers and aliases for this filter.
     * @var array
     */
    private $filters = array();

    /**
     * The response messages for the filters.
     * @var array
     */
    private $messages = array();

    /**
     * ExtractFilters constructor.
     *
     * @param string $subject
     */
    public function __construct(string $subject)
    {
        // Instantiating the target filter and passing empty arrays to avoid conflict.
        $this->subject = new $subject(array(), array());
    }

    /**
     * This parses the aliases from the filter and assigns the class to it.
     *
     * @param array $aliases
     *
     * @return void
     */
    private function handleAliases(array $aliases): void
    {

    }

    /**
     * This parses the filters and prepares them for the validation.
     *
     * @param array $filters
     *
     * @return void
     */
    private function handleFilters(array $filters): void
    {

    }

    /**
     * This handles the messages and registers them.
     *
     * @param array $messages
     *
     * @return void
     */
    private function handleMessages(array $messages): void
    {

    }
}
