<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a3aa3e97762df27befb353d69910d3a
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeliosPackages\\Bootsrap3\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeliosPackages\\Bootsrap3\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a3aa3e97762df27befb353d69910d3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a3aa3e97762df27befb353d69910d3a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a3aa3e97762df27befb353d69910d3a::$classMap;

        }, null, ClassLoader::class);
    }
}
