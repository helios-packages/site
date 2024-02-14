<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1316408e5da27cccf9c8b36c6a84004f
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

        spl_autoload_register(array('ComposerAutoloaderInit1316408e5da27cccf9c8b36c6a84004f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1316408e5da27cccf9c8b36c6a84004f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1316408e5da27cccf9c8b36c6a84004f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}