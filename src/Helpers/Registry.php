<?php

namespace Mediadevs\Validator\Helpers;

use ReflectionException;
use Mediadevs\Validator\Services\FilterProvider;

class Registry
{
    /**
     * The registry types for this library, these are de default properties for each filter class.
     */
    public const REGISTRY_TYPES = array('filters', 'aliases', 'messages');

    /**
     * All the registered classes will be stored in here.
     *
     * @var array
     */
    private $registry = array(
        'filters'   => array(),
        'messages'  => array(),
    );

    /**
     * Loading all the classes from \Services\FilterProvider and parsing the filters to collect the configuration
     * Using te previously collected configuration to generate a registry which can be used for validation.
     *
     * @throws ReflectionException
     */
    public function __construct()
    {
        FilterProvider::getInstance();

        // Parsing through all the providers
        foreach (FilterProvider::collect() as $provider) {
            $filter = new ExtractFilters($provider);

            // Registering the properties
            $this->registry['filters'] += $filter->getFilters();
            $this->registry['messages'] += $filter->getMessages();
        }
    }

    /**
     * Collecting the registry based upon the given target.
     *
     * @param string $type
     * @param string $index
     *
     * @return string|void
     */
    public function getRegistry(string $type, string $index): string
    {
        $targetIndex = null;

        // Whether the type exists inside the $data array
        if ($this->hasType($type)) {

            // Whether the $data array has the given index
            if ($this->hasIndex($type, $index)) {
                $targetIndex = $index;
            }

            // In this case the $data array has no index of $index, now we'll try to reverse search by value
            if ($this->hasValue($type, $index)) {
                $targetIndex = $this->getIndexByValue($type, $index);
            }
        }

        return $this->getValuesByIndex($type, $targetIndex);
    }

    /**
     * Whether the given type is a valid one.
     *
     * @param string $type
     *
     * @return bool
     */
    public function isValidType(string $type): bool
    {
        return (bool) in_array($type, self::REGISTRY_TYPES) ? true : false;
    }

    /**
     * Validating whether registry contains the given type.
     *
     * @param string $type
     *
     * @return bool
     */
    public function hasType(string $type): bool
    {
        // Whether the given type is a valid one.
        if ($this->isValidType($type)) {
            return (bool) array_key_exists($type, $this->registry) ? true : false;
        }

        return (bool) false;
    }

    /**
     * Validating whether the data contains the given index.
     *
     * @param string $type
     * @param string $index
     *
     * @return bool
     */
    public function hasIndex(string $type, string $index): bool
    {
        if ($this->hasType($type)) {
            return (bool) array_key_exists($index, $this->registry[$type]) ? true : false;
        }

        return (bool) false;
    }

    /**
     * Validating whether the data contains the given value.
     *
     * @param string $type
     * @param string $value
     *
     * @return bool
     */
    public function hasValue(string $type, string $value): bool
    {
        if ($this->hasType($type)) {
            // Reversing the data array; ['key' => 'value'] will now be ['value' => 'key']
            $reverseData = array_flip($this->registry[$type]);

            return (bool) (isset($reverseData[$value])) ? true : false;
        }

        return (bool) false;
    }

    /**
     * Validating whether the given index has a value.
     *
     * @param string $type
     * @param string $index
     *
     * @return bool
     */
    public function indexHasValue(string $type, string $index): bool
    {
        if ($this->hasType($type) && $this->hasIndex($type, $index)) {
            return (bool) !empty($this->registry[$type][$index]) ? true : false;
        }

        return (bool) false;
    }

    /**
     * Collecting the index by the given value.
     *
     * @param string $type
     * @param string $value
     *
     * @return string|void
     */
    public function getIndexByValue(string $type, string $value)
    {
        if ($this->hasType($type) && $this->hasValue($type, $value)) {
            // Reversing the data array; ['key' => 'value'] will now be ['value' => 'key']
            $reverseData = array_flip($this->registry[$type]);

            return $reverseData[$type][$value];
        }
    }

    /**
     * Collecting multiple values based on the given index.
     *
     * @param string $type
     * @param string $index
     *
     * @return array|void
     */
    public function getValuesByIndex(string $type, string $index)
    {
        if ($this->hasType($type) && $this->hasIndex($type, $index) && $this->indexHasValue($type, $index)) {
            return $this->registry[$type][$index];
        }
    }
}
