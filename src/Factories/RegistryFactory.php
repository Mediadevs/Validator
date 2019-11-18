<?php

namespace Mediadevs\Validator\Factories;

use Mediadevs\Validator\Helpers\Registry;
use Mediadevs\Validator\Filters\FilterInterface;
use Mediadevs\Validator\Services\FilterProvider;

class RegistryFactory
{
    /**
     * The properties for each filter
     * for default filters 'messages' will be stored inside the config/translations.php
     * but for custom classes the $messages array should be registered inside the class
     */
    public const FILTER_PROPERTIES = array('identifier', 'aliases', 'messages');

    /**
     * The filter will be constructed and stored in here, the filter must implement the FilterInterface
     * @var FilterInterface
     */
    private $provider;

    /**
     * Parsing through all the providers inside the FilterProviders and registering them inside the registry
     */
    public function build()
    {
        // Instantiating and loading the registry
        Registry::getInstance();

        // Parsing through the filter providers and registering the properties inside the registry
        foreach ($this->loadProviders() as $provider) {
            // Creating an instance of this registry so it can be registered
            $this->createInstance($provider);

            // Loading all the properties and register them
            foreach ($this->getPropertiesFromProvider($provider) as $property => $propertyValue) {
                Registry::register($property, $this->provider->identifier, $propertyValue);
            }
        }
    }

    /**
     * Creating an instance of the provider which will be handled
     * @param string $provider
     *
     * @return void
     */
    public function createInstance(string $provider): void
    {
        // Requiring the class
        $this->loadClass($provider);

        // Instantiating the class and storing the object inside $this->targetObject
        $this->provider = new $provider();
    }

    /**
     * Creating an instance of the class to collect its properties
     * @param string $provider
     *
     * @return void
     */
    private function loadClass(string $provider): void
    {
        // Gathering the path of the project base (Where the /vendor map is located)
        $directory = dirname(__FILE__, 6) . DIRECTORY_SEPARATOR;
        // Exploding the namespace into an array so it can be used to collect the classname.
        $namespaces = explode('\\', $provider);
        // Using the last index from the array to get the classname from the current provider.
        $classname = end($namespaces);

        // Including the file based on the previous declared variables
        require_once($directory . $classname . '.php');
    }

    /**
     * Loading all the providers from the designated provider class
     * @return array
     */
    public function loadProviders(): array
    {
        return (new FilterProvider())->providers;
    }

    /**
     * Collecting the properties from the class
     * @param string $provider
     *
     * @return array
     */
    private function getPropertiesFromProvider(string $provider): array
    {
        $properties = array();

        // Parsing through all the properties
        foreach (self::FILTER_PROPERTIES as $property) {
            // validating whether the class has a the property
            if ($this->providerHasProperty($provider, $property)) {
                // Storing the property inside the properties array by variable variable loading
                $properties[$property] = $this->provider->$property;
            }
        }

        return $properties;
    }

    /**
     * Determines whether the provider has the required properties
     * @param string $provider
     * @param string $property
     *
     * @return bool
     */
    private function providerHasProperty(string $provider, string $property): bool
    {
        return (bool) property_exists($provider, $property) ? true : false;
    }
}
