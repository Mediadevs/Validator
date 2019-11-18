<?php

namespace Mediadevs\Validator\Helpers;

class Registry extends Singleton
{
    public const REGISTRY_TYPES = array('filters', 'aliases', 'messages');

    /**
     * The data which this registry will handle
     * @var array
     */
    private static $data = array();

    /**
     * Registering the class in the $data array
     * @param string $type
     * @param string $index
     * @param        $data ($data has no strict type, it can be either an array or a string)
     *
     * @return void
     */
    public static function register(string $type, string $index, $data): void
    {
        if (self::isValidType($type)) {
            // Which type should be handled, the types are simple the required properties for a filter
            switch ($type) {
                // 'identifiers'
                case self::REGISTRY_TYPES[0]:
                    self::handleIdentifier($index, $data);
                    break;

                // 'aliases'
                case self::REGISTRY_TYPES[1]:
                    self::handleAliases($index, $data);
                    break;

                // 'messages'
                case self::REGISTRY_TYPES[2]:
                    self::handleMessages($index, $data);
                    break;
            }
        }
    }

    /**
     * Registering the filters inside the $data array
     * @param string $index
     * @param        $data
     *
     * @return void
     */
    private static function handleIdentifier(string $index, $data): void
    {
        self::$data[self::REGISTRY_TYPES[0]] = array_merge(self::$data[self::REGISTRY_TYPES[0]], [$index => $data]);
    }

    /**
     * Registering the filters inside the $data array
     * @param string $index
     * @param        $data
     *
     * @return void
     */
    private static function handleAliases(string $index, $data): void
    {
        $aliases = array();

        // Parsing through the data (in this case the aliases) and assigning the correct class to it.
        foreach ($data as $alias) {
            $aliases[$alias] = self::getRegistry(self::REGISTRY_TYPES[1], $index);
        }

        self::$data[self::REGISTRY_TYPES[0]] = array_merge(self::$data[self::REGISTRY_TYPES[0]], $aliases);
    }

    /**
     * Registering the filters inside the $data array
     * @param string $index
     * @param        $data
     *
     * @return void
     */
    private static function handleMessages(string $index, $data): void
    {
        self::$data[self::REGISTRY_TYPES[2]] = array_merge(self::$data[self::REGISTRY_TYPES[2]], [$index => $data]);
    }

    /**
     * Collecting the registry based upon the given target
     * @param string $type
     * @param string $index
     *
     * @return string|void
     */
    public static function getRegistry(string $type, string $index): string
    {
        $targetIndex = null;

        // Whether the type exists inside the $data array
        if (self::hasType($type)) {
            // Whether the $data array has the given index
            if (self::hasIndex($type, $index)) {
                $targetIndex = $index;
            // In this case the $data array has no index of $index, now we'll try to reverse search by value
            } elseif (self::hasValue($type, $index)) {
                $targetIndex = self::getIndexByValue($type, $index);
            } else {
                // Index doesn't exist at all.
                return;
            }
        }

        return self::getValuesByIndex($type, $targetIndex);
    }

    /**
     * Whether the given type is a valid one.
     * @param string $type
     *
     * @return bool
     */
    public static function isValidType(string $type): bool
    {
        return (bool) in_array($type, self::REGISTRY_TYPES) ? true : false;
    }

    /**
     * Validating whether registry contains the given type
     * @param string $type
     *
     * @return bool
     */
    public static function hasType(string $type): bool
    {
        // Whether the given type is a valid one.
        if (self::isValidType($type)) {
            return (bool) array_key_exists($type, self::$data) ? true : false;
        }

        return (bool) false;
    }

    /**
     * Validating whether the data contains the given index
     * @param string $type
     * @param string $index
     *
     * @return bool
     */
    public static function hasIndex(string $type, string $index): bool
    {
        if (self::hasType($type)) {
            return (bool) array_key_exists($index, self::$data[$type]) ? true : false;
        }

        return (bool) false;
    }

    /**
     * Validating whether the data contains the given value
     * @param string $type
     * @param string $value
     *
     * @return bool
     */
    public static function hasValue(string $type, string $value): bool
    {
        if (self::hasType($type)) {
            // Reversing the data array; ['key' => 'value'] will now be ['value' => 'key']
            $reverseData = array_flip(self::$data[$type]);

            return (bool) (isset($reverseData[$value])) ? true : false;
        }

        return (bool) false;
    }

    /**
     * Validating whether the given index has a value
     * @param string $type
     * @param string $index
     *
     * @return bool
     */
    public static function indexHasValue(string $type, string $index): bool
    {
        if (self::hasType($type) && self::hasIndex($type, $index)) {
            return (bool) !empty(self::$data[$type][$index]) ? true : false;
        }

        return (bool) false;
    }

    /**
     * Collecting the index by the given value
     * @param string $type
     * @param string $value
     *
     * @return string|void
     */
    public static function getIndexByValue(string $type, string $value)
    {
        if (self::hasType($type) && self::hasValue($type, $value)) {
            // Reversing the data array; ['key' => 'value'] will now be ['value' => 'key']
            $reverseData = array_flip(self::$data[$type]);

            return $reverseData[$type][$value];
        }
    }

    /**
     * Collecting multiple values based on the given index
     * @param string $type
     * @param string $index
     *
     * @return array|void
     */
    public static function getValuesByIndex(string $type, string $index)
    {
        if (self::hasType($type) && self::hasIndex($type, $index) && self::indexHasValue($type, $index)) {
            return self::$data[$type][$index];
        }
    }
}
