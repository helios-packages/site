<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited1d25ef7be663282e1f92351b9271e3
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeliosPackages\\Tabler\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeliosPackages\\Tabler\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInited1d25ef7be663282e1f92351b9271e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited1d25ef7be663282e1f92351b9271e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited1d25ef7be663282e1f92351b9271e3::$classMap;

        }, null, ClassLoader::class);
    }
}