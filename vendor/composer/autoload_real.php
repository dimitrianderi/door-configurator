<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit923b114b8510b37f9fe4ef15e7dd47f1
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit923b114b8510b37f9fe4ef15e7dd47f1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit923b114b8510b37f9fe4ef15e7dd47f1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit923b114b8510b37f9fe4ef15e7dd47f1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
