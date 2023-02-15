<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6357c7ac254840bfab41cb52cf022cdb
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit6357c7ac254840bfab41cb52cf022cdb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6357c7ac254840bfab41cb52cf022cdb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6357c7ac254840bfab41cb52cf022cdb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}