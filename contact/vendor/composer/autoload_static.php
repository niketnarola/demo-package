<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2dc80d1e0dd1cd20cfb77930065d19df
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Ssn\\Contact\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ssn\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2dc80d1e0dd1cd20cfb77930065d19df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2dc80d1e0dd1cd20cfb77930065d19df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2dc80d1e0dd1cd20cfb77930065d19df::$classMap;

        }, null, ClassLoader::class);
    }
}
