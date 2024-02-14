<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b14009a331ab695cb24929303591c07
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeliosPackages\\Simplemde\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeliosPackages\\Simplemde\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b14009a331ab695cb24929303591c07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b14009a331ab695cb24929303591c07::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b14009a331ab695cb24929303591c07::$classMap;

        }, null, ClassLoader::class);
    }
}