<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite19ca94e6d732251a97beaa2e5b229a8
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeliosPackages\\PrimeVue\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeliosPackages\\PrimeVue\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite19ca94e6d732251a97beaa2e5b229a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite19ca94e6d732251a97beaa2e5b229a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite19ca94e6d732251a97beaa2e5b229a8::$classMap;

        }, null, ClassLoader::class);
    }
}
