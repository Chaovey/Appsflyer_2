<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit477e0ce1ef61b8c3f412c453d908fd42
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phoenix\\Appsflyer\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phoenix\\Appsflyer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit477e0ce1ef61b8c3f412c453d908fd42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit477e0ce1ef61b8c3f412c453d908fd42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit477e0ce1ef61b8c3f412c453d908fd42::$classMap;

        }, null, ClassLoader::class);
    }
}
