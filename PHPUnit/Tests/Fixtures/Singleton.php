<?php
class PHPUnit_Tests_Fixtures_Singleton
{
    private static $uniqueInstance = NULL;

    protected function __construct()
    {
    }

    private final function __clone()
    {
    }

    public static function getInstance()
    {
        if (self::$uniqueInstance === NULL) {
            self::$uniqueInstance = new PHPUnit_Tests_Fixtures_Singleton;
        }

        return self::$uniqueInstance;
    }
}
