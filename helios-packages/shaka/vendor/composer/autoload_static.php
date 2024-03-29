<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c9716bfafbbf4e8c81c782de62e5f7d
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeliosPackages\\Shaka\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeliosPackages\\Shaka\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c9716bfafbbf4e8c81c782de62e5f7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c9716bfafbbf4e8c81c782de62e5f7d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c9716bfafbbf4e8c81c782de62e5f7d::$classMap;

        }, null, ClassLoader::class);
    }
}
