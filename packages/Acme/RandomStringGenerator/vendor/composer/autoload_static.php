<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80b9734d7681d37dceffac4f9215855e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abukbt13\\RandomStringGenerator\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abukbt13\\RandomStringGenerator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit80b9734d7681d37dceffac4f9215855e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80b9734d7681d37dceffac4f9215855e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80b9734d7681d37dceffac4f9215855e::$classMap;

        }, null, ClassLoader::class);
    }
}
