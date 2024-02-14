<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite923cf75dff253ba2959d33a0d1d17a0
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

        spl_autoload_register(array('ComposerAutoloaderInite923cf75dff253ba2959d33a0d1d17a0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite923cf75dff253ba2959d33a0d1d17a0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite923cf75dff253ba2959d33a0d1d17a0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
