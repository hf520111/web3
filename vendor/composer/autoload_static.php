<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit12a6884b980f9e74a24b3696b0ea0b92
{
    public static $files = array (
        '0938b74176f0fefc32b8f83948805917' => __DIR__ . '/../..' . '/src/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FormRule\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FormRule\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/FormRule',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit12a6884b980f9e74a24b3696b0ea0b92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit12a6884b980f9e74a24b3696b0ea0b92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit12a6884b980f9e74a24b3696b0ea0b92::$classMap;

        }, null, ClassLoader::class);
    }
}
