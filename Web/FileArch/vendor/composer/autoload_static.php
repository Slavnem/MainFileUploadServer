<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e47d60a674030ab3a0cc855fdcea82f
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UserApi\\' => 8,
        ),
        'S' => 
        array (
            'SessionApi\\' => 11,
        ),
        'F' => 
        array (
            'FileArchWeb\\' => 12,
            'FileApi\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UserApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/yourvendor/User/src',
        ),
        'SessionApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../MicroService/Api/Session/src',
            1 => __DIR__ . '/..' . '/yourvendor/Session/src',
            2 => __DIR__ . '/..' . '/yourvendor/session/src',
        ),
        'FileArchWeb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'FileApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../MicroService/Api/File/src',
            1 => __DIR__ . '/..' . '/yourvendor/file/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e47d60a674030ab3a0cc855fdcea82f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e47d60a674030ab3a0cc855fdcea82f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e47d60a674030ab3a0cc855fdcea82f::$classMap;

        }, null, ClassLoader::class);
    }
}
