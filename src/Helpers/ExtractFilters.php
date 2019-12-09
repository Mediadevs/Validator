<?php

namespace Mediadevs\Validator\Helpers;

use ReflectionException;

class ExtractFilters
{
    /**
     * The full namespace for the filter which is going to be parsed.
     *
     * @var string
     */
    private $subject;

    /**
     * The filters for this validation provider.
     *
     * @var array
     */
    private $filters = array();

    /**
     * The messages for this validation provider.
     *
     * @var array
     */
    private $messages = array();

    /**
     * ExtractFilters constructor.
     *
     * @param string $subject
     *
     * @throws ReflectionException
     */
    public function __construct(string $subject)
    {
        $this->subject = $subject;

        // Handling the attributes
        $class = (new ClassParser())->parse($subject);

        $identifier = $class->getIdentifier();
        $aliases = $class->getAliases();
        $message = $class->getMessage();

        if ($identifier && !empty($aliases)) {
            $this->handleIdentifier($identifier);
            $this->handleAliases($aliases);
            $this->handleMessages($identifier, $aliases, $message);
        }
    }

    /**
     * This parses the identifier and prepares it for the validation.
     *
     * @param string $identifier
     *
     * @return void
     */
    private function handleIdentifier(string $identifier): void
    {
        $this->filters += [$identifier => $this->subject];

         return;
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
        foreach ($aliases as $alias) {
            $this->filters += [$alias => $this->subject];
        }

        return;
    }

    /**
     * This handles the messages and registers them.
     *
     * @param string $identifier
     * @param array  $aliases
     * @param array  $messages
     *
     * @return void
     */
    private function handleMessages(string $identifier, array $aliases, array $messages): void
    {
        $this->messages += [$identifier => $messages];

        // Parsing through the aliases and creating an response message for each alias
        foreach ($aliases as $alias) {
            $this->messages += [$alias => $messages];
        }

        return;
    }

    /**
     * Returning filters and the parsed aliases which have been prepared.
     *
     * @return array
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    /**
     * Returning messages for this filter.
     *
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}
