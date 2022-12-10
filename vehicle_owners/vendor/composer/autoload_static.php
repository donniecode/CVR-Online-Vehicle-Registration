<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bda40e57c11de1f2cfa4679cab5360a
{
    public static $files = array (
        'b9fa40d76e3a17d43fa5f112ac14719d' => __DIR__ . '/vendor',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Paynow\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Paynow\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/vendor',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bda40e57c11de1f2cfa4679cab5360a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bda40e57c11de1f2cfa4679cab5360a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4bda40e57c11de1f2cfa4679cab5360a::$classMap;

        }, null, ClassLoader::class);
    }
}
