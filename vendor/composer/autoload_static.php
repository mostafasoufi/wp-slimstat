<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09c8e0e0cfea3b2fb368cb99a2eeaaec
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SlimStat\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SlimStat\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit09c8e0e0cfea3b2fb368cb99a2eeaaec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09c8e0e0cfea3b2fb368cb99a2eeaaec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09c8e0e0cfea3b2fb368cb99a2eeaaec::$classMap;

        }, null, ClassLoader::class);
    }
}
