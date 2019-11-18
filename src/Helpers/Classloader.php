<?php

namespace Mediadevs\Validator\Helpers;

use Mediadevs\Validator\Filters\FilterInterface;

class Classloader
{
    /**
     * The properties for each filter
     * for default filters 'messages' will be stored inside the config/translations.php
     * but for custom classes the $messages array should be registered inside the class
     */
    private const FILTER_PROPERTIES = array('identifier', 'aliases', 'messages');

    /**
     * The target filter for this factory instance
     * @var string
     */
    private $class;

    /**
     * The filter will be constructed and stored in here, the filter must implement the FilterInterface
     * @var FilterInterface
     */
    private $filterObject;

    /**
     * FilterFactory constructor.
     *
     * @param string $class
     */
    public function __construct(string $class)
    {
        // Loading the factory properties
        $this->class = $class;

        // Requiring the file where the designated filter is located
        $this->loadClass();

        // Instantiating the filter object, also giving empty parameters to the filter to avoid conflicts
        $this->filterObject = new $class(array(), array());

        // Instantiating and loading the registry
        Registry::getInstance();
    }

    /**
     * Creating an instance of the class to collect its properties
     *
     * @return void
     */
    private function loadClass(): void
    {
        // Gathering the path of the project base (Where the /vendor map is located)
        $directory = dirname(__FILE__, 6) . DIRECTORY_SEPARATOR;
        // Exploding the namespace into an array to collect the classname
        $namespaces = explode('\\', $this->class);
        // Collecting the classname from the name of exploded namespaces
        $classname = end($namespaces);

        // Including the file based on the previous declared variables
        require_once($directory . $classname . '.php');

        return;
    }

    /**
     * Collecting the properties from the class
     *
     * @return array
     */
    private function getPropertiesFromClass(): array
    {
        $properties = array();

        // Parsing through all the properties
        foreach (self::FILTER_PROPERTIES as $property) {
            // validating whether the class has a the property
            if ($this->classHasProperty($property)) {
                // Storing the property inside the properties array by variable variable loading
                $properties[$property] = $this->filterObject->$property;
            }
        }

        return $properties;
    }

    /**
     * Validating whether the class has the property
     * @param string $property
     *
     * @return bool
     */
    private function classHasProperty(string $property): bool
    {
        return (bool) property_exists($this->class, $property) ? true : false;
    }
}
