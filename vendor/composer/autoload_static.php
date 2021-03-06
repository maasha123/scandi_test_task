<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfcd0ce07a813d7baf86f002c93f5669a
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'data\\htdocs	est\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'data\\htdocs	est\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfcd0ce07a813d7baf86f002c93f5669a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfcd0ce07a813d7baf86f002c93f5669a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfcd0ce07a813d7baf86f002c93f5669a::$classMap;

        }, null, ClassLoader::class);
    }
}
