<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25f04863eb071346e4022e2d20edce33
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/mvc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25f04863eb071346e4022e2d20edce33::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25f04863eb071346e4022e2d20edce33::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
