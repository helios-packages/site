<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c3a5e9e375e8ca2d697b4264a8d8f92
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeliosPackages\\Pwa\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeliosPackages\\Pwa\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c3a5e9e375e8ca2d697b4264a8d8f92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c3a5e9e375e8ca2d697b4264a8d8f92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c3a5e9e375e8ca2d697b4264a8d8f92::$classMap;

        }, null, ClassLoader::class);
    }
}
