<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b89f8813627491507ab282ada4c20d7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b89f8813627491507ab282ada4c20d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b89f8813627491507ab282ada4c20d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b89f8813627491507ab282ada4c20d7::$classMap;

        }, null, ClassLoader::class);
    }
}
