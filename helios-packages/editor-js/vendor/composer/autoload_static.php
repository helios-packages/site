<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06298b795a28047143fe245f61fab3ca
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeliosPackages\\EditorJs\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeliosPackages\\EditorJs\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit06298b795a28047143fe245f61fab3ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06298b795a28047143fe245f61fab3ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06298b795a28047143fe245f61fab3ca::$classMap;

        }, null, ClassLoader::class);
    }
}