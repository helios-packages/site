<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09ff50d09f971932aa7b4a67535117b2
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeliosPackages\\MiniPaint\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeliosPackages\\MiniPaint\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit09ff50d09f971932aa7b4a67535117b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09ff50d09f971932aa7b4a67535117b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09ff50d09f971932aa7b4a67535117b2::$classMap;

        }, null, ClassLoader::class);
    }
}