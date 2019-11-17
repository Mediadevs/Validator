<?php

namespace Mediadevs\Validator\Factories;

class FilterFactory
{
    /**
     * The properties which any filter class must have
     * @var array
     */
    private $properties = array('identifier', 'aliases', 'messages');

    public function build()
    {

    }

    private function loadClass()
    {
        /**
         * Todo: Loading the class based upon the namespace
         * Todo: Dissect the namespace and take the classname, this classname should also be the filename
         * Todo: Require the filename once the make sure that classes outside the registry can also be used
         * Todo: Validate whether the directory / class exists
         */
    }

    private function classHasProperty(string $property): bool
    {
        /**
         * Todo: Validate whether the class has the given property
         */
    }

    private function getPropertiesFromClass()
    {

    }
}
