<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4cbdb7ec51614bb9e4765042f4b47921
{
    public static $files = array (
        '78dbcdbf67afc9a5ccb4aa5471790398' => __DIR__ . '/../..' . '/Core/Functions/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4cbdb7ec51614bb9e4765042f4b47921::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4cbdb7ec51614bb9e4765042f4b47921::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}