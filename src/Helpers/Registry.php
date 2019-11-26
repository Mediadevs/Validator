<?php

namespace Mediadevs\Validator\Helpers;

class Registry extends Singleton
{
    /**
     * All the registered classes will be stored in here.
     *
     * @var array
     */
    private static $registry = array();

    /**
     * Registering the class in the $data array.
     *
     * @param array $registries
     *
     * @return void
     */
    public static function register(array $registries): void
    {
        self::$registry = array_merge(self::$registry, $registries);
    }

    /**
     * Collecting the registry based upon the given target.
     *
     * @param string $index
     *
     * @return string|void
     */
    public static function getRegistry(string $index)
    {
        $targetIndex = null;

        // Whether the $data array has the given index
        if (self::hasIndex($index)) {
            $targetIndex = $index;
        }

        // In this case the $data array has no index of $index, now we'll try to reverse search by value
        if (self::hasValue($index)) {
            $targetIndex = self::getIndexByValue($index);
        }

        return self::getValuesByIndex($targetIndex);
    }

    /**
     * Validating whether the data contains the given index.
     *
     * @param string $index
     *
     * @return bool
     */
    public static function hasIndex(string $index): bool
    {
        return (bool) array_key_exists($index, self::$registry) ? true : false;
    }

    /**
     * Validating whether the data contains the given value.
     *
     * @param string $value
     *
     * @return bool
     */
    public static function hasValue(string $value): bool
    {
        // Reversing the data array; ['key' => 'value'] will now be ['value' => 'key']
        $reverseData = array_flip(self::$registry);

        return (bool) (isset($reverseData[$value])) ? true : false;
    }

    /**
     * Validating whether the given index has a value.
     *
     * @param string $index
     *
     * @return bool
     */
    public static function indexHasValue(string $index): bool
    {
        if (self::hasIndex($index)) {
            return (bool) !empty(self::$registry[$index]) ? true : false;
        }

        return (bool) false;
    }

    /**
     * Collecting the index by the given value.
     *
     * @param string $value
     *
     * @return string|void
     */
    public static function getIndexByValue(string $value)
    {
        if (self::hasValue($value)) {
            // Reversing the data array; ['key' => 'value'] will now be ['value' => 'key']
            $reverseData = array_flip(self::$registry);

            return $reverseData[$value];
        }
    }

    /**
     * Collecting multiple values based on the given index.
     *
     * @param string $index
     *
     * @return array|void
     */
    public static function getValuesByIndex(string $index)
    {
        if (self::hasIndex($index) && self::indexHasValue($index)) {
            return self::$registry[$index];
        }
    }
}
