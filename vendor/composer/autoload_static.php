<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fa2ef42e9e8c745179bbe3452a3d529
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pc\\lib\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pc\\lib\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fa2ef42e9e8c745179bbe3452a3d529::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fa2ef42e9e8c745179bbe3452a3d529::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2fa2ef42e9e8c745179bbe3452a3d529::$classMap;

        }, null, ClassLoader::class);
    }
}