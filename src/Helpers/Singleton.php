<?php

namespace Mediadevs\Validator\Helpers;

use Exception;

class Singleton
{
    /**
     * Singleton instances will be stored in this register.
     *
     * @var array
     */
    private static $instances = array();

    /**
     * Singleton's constructor should not be public. However, it can't be
     * private either if we want to allow subclassing.
     */
    protected function __construct()
    {
        // Unreachable.
    }

    /**
     * Cloning and unserialization are not permitted for singletons.
     */
    protected function __clone()
    {
        // Unreachable.
    }

    /**
     * @throws Exception
     *
     * @return void
     */
    public function __wakeup(): void
    {
        throw new Exception('Cannot unserialize singleton');
    }

    /**
     * The method you use to get the Singleton's instance.
     */
    public static function getInstance(): self
    {
        $subclass = static::class;

        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }

        return self::$instances[$subclass];
    }
}
