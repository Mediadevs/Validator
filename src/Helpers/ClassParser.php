<?php

namespace Mediadevs\Validator\Helpers;

use ReflectionClass;
use ReflectionException;
use Mediadevs\Validator\Filters\FilterInterface;

class ClassParser
{
    /**
     * Parsing the filter to collect it's properties and configuration.
     *
     * @param string $namespace
     *
     * @throws ReflectionException
     *
     * @return array
     */
    public function parse(string $namespace): array
    {
        // Results will be stored in here
        $collection = array();

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
            $collection['identifiers'] = $this->getProperty($filter, 'identifier');
            $collection['aliases'] = $this->getProperty($filter, 'identifier');

            // This only comes in action when it is a custom filter.
            if ($hasMessage) {
                $collection['message'] = $this->getProperty($filter, 'message');
            }
        }

        return $collection;
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
}
