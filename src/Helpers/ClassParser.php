<?php

namespace Mediadevs\Validator\Helpers;

use ReflectionClass;
use ReflectionException;
use Mediadevs\Validator\Filters\FilterInterface;

class ClassParser
{
    /**
     * The identifier for this filter.
     *
     * @var string
     */
    private $identifier;

    /**
     * The aliases for this filter.
     *
     * @var array
     */
    private $aliases = array();

    /**
     * The message / responses for this filter.
     *
     * @var array
     */
    private $message = array();

    /**
     * Parsing the filter to collect it's properties and configuration.
     *
     * @param string $namespace
     *
     * @throws ReflectionException
     *
     * @return self
     */
    public function parse(string $namespace): self
    {
        // Collecting the classname and instantiating the class
        $filename = $this->getFileName($namespace);
        $this->loadFile($filename);

        // Creating a workable instance of the class with empty arrays so the constructor won't fail.
        $filter = (new $namespace(array(), array()));

        // Validating whether all the properties exist.
        $hasIdentifier = $this->hasProperty($filter, 'identifier');
        $hasAliases = $this->hasProperty($filter, 'aliases');
        $hasMessage = $this->hasProperty($filter, 'message');

        // Validating whether the properties exist.
        if ($hasIdentifier && $hasAliases) {
            $this->identifier = $this->getProperty($filter, 'identifier');
            $this->aliases = $this->getProperty($filter, 'aliases');

            // This only comes in action when it is a custom filter.
            if ($hasMessage) {
                $this->message = $this->getProperty($filter, 'message');
            }
        }

        return $this;
    }

    /**
     * Collecting the filename from the filter using a reflection class.
     *
     * @param string $namespace
     *
     * @throws ReflectionException
     *
     * @return string
     */
    private function getFileName(string $namespace): string
    {
        return (new ReflectionClass($namespace))->getFileName();
    }

    /**
     * Requiring the file in case it is a custom filter, else the files will be automatically loaded by composer.
     *
     * @param string $filename
     *
     * @return mixed
     */
    private function loadFile(string $filename)
    {
        return require_once $filename;
    }

    /**
     * Whether the filter has the given property or not.
     *
     * @param FilterInterface $filter
     * @param string          $property
     *
     * @return bool
     */
    private function hasProperty(FilterInterface $filter, string $property): bool
    {
        return (bool) property_exists($filter, $property) ? true : false;
    }

    /**
     * Collecting the property from the filter.
     *
     * @param FilterInterface $filter
     * @param string          $property
     *
     * @return mixed
     */
    private function getProperty(FilterInterface $filter, string $property)
    {
        return $filter->getProperty($property);
    }

    /**
     * Collecting the identifier from this filter.
     *
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * Collecting the aliases from this filter.
     *
     * @return array
     */
    public function getAliases(): array
    {
        return $this->aliases;
    }

    /**
     * Collecting the message from this filter.
     *
     * @return array
     */
    public function getMessage(): array
    {
        return $this->message;
    }
}
