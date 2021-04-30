<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52cfba7e9bb94a7ae4b3a16924270297
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52cfba7e9bb94a7ae4b3a16924270297::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52cfba7e9bb94a7ae4b3a16924270297::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52cfba7e9bb94a7ae4b3a16924270297::$classMap;

        }, null, ClassLoader::class);
    }
}
