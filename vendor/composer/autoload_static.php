<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7246b908a245d90c7113aa23d86d200
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Visal\\Appsflyer\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Visal\\Appsflyer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite7246b908a245d90c7113aa23d86d200::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7246b908a245d90c7113aa23d86d200::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite7246b908a245d90c7113aa23d86d200::$classMap;

        }, null, ClassLoader::class);
    }
}
