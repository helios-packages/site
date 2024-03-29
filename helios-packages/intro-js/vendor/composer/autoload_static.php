<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27d70f5c50c489b189294d04c8fb3358
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeliosPackages\\IntroJs\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeliosPackages\\IntroJs\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit27d70f5c50c489b189294d04c8fb3358::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27d70f5c50c489b189294d04c8fb3358::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27d70f5c50c489b189294d04c8fb3358::$classMap;

        }, null, ClassLoader::class);
    }
}
