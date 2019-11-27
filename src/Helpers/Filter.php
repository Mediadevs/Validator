<?php

namespace Mediadevs\Validator\Helpers;

class Filter extends Singleton
{
    /**
     * All the registered classes will be stored in here.
     *
     * @var array
     */
    private static $filters = array();

    /**
     * Registering the filter inside the $filters array.
     *
     * @param array $filters
     *
     * @return void
     */
    public static function register(array $filters): void
    {
        self::$filters = array_merge(self::$filters, $filters);
    }
}
