<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e31512955dbcd2048fe2bf697dd1c06
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Flower\\Rose\\' => 12,
            'Flower\\Lily\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Flower\\Rose\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Flower/Rose',
        ),
        'Flower\\Lily\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Flower/Lily',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e31512955dbcd2048fe2bf697dd1c06::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e31512955dbcd2048fe2bf697dd1c06::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
