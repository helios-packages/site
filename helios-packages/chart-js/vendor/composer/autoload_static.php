<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d2054237f39915fb24568cbd9f37dc3
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeliosPackages\\ChartJs\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeliosPackages\\ChartJs\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d2054237f39915fb24568cbd9f37dc3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d2054237f39915fb24568cbd9f37dc3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2d2054237f39915fb24568cbd9f37dc3::$classMap;

        }, null, ClassLoader::class);
    }
}
