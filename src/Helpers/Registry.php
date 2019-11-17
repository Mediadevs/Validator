<?php

namespace Mediadevs\Validator\Helpers;

use Mediadevs\Validator\Helpers\Singleton;

class Registry extends Singleton
{
    /**
     * The data which this registry will handle
     * @var array
     */
    private static $data = array();

    /**
     * Collecting the registry based upon the given target
     * @param string $index
     *
     * @return string|void
     */
    public static function getRegistry(string $index): string
    {
        if (self::hasIndex($index)) {
            return self::$data[$index];
        }
    }

    /**
     * Registering the class in the $data array
     * @param string $class
     *
     * @return void
     */
    public static function register(string $class): void
    {
        /**
         * Todo: Write logic which handles the registry of the class
         */
    }

    /**
     * Loading the registry based on the given registries
     * @param array $registries
     *
     * @return void
     */
    public static function loadRegistries(array $registries): void
    {
        /**
         * Todo: Load Services\FilterProvider and assign the data into the $data array
         */
    }

    /**
     * Validating whether the data contains the given index
     * @param string $index
     *
     * @return bool
     */
    public static function hasIndex(string $index): bool
    {
        /**
         * Todo: Validate whether the $data array contains the given index
         */
    }

    /**
     * Validating whether the data contains the given value
     * @param string $value
     * @return bool
     */
    public static function hasValue(string $value): bool
    {
        /**
         * Todo: Validate whether the $data array contains the given value
         */
    }

    /**
     * Validating whether the given index has a value
     * @param string $index
     *
     * @return bool
     */
    public static function indexHasValue(string $index): bool
    {
        /**
         * Todo: Validate the data array has a value based on the given index, also implement hasIndex to improve the validation
         */
    }

    /**
     * Collecting the value of the registry based upon the given index
     * @param string $index
     *
     * @return string
     */
    public static function getValueByIndex(string $index): string
    {
        /**
         * Todo: Collect the value based upon the given index, also validate whether the index has a value
         */
    }

    /**
     * Collecting the index by the given value
     * @param string $value
     *
     * @return string
     */
    public static function getIndexByValue(string $value): string
    {
        /**
         * Todo: Collect the index based upon the given value, make sure the value exists inside the index array
         */
    }

    /**
     * Collecting multiple values based on the given index
     * @param string $index
     *
     * @return array
     */
    public static function getValuesByIndex(string $index): array
    {
        /**
         * Todo: Collect an array of values based on the given index, validate whether the values and index exist inside the data array
         */
    }
}
