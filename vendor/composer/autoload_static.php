<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ab9c0427bc1121fd4644ddf28bbd7bb
{
    public static $files = array (
        '08169e5f774a6bcc1ae716b1a03b5ba8' => __DIR__ . '/..' . '/homework/function/index.php',
    );

    public static $prefixesPsr0 = array (
        'a' => 
        array (
            'app' => 
            array (
                0 => __DIR__ . '/..' . '/homework/pacegist',
                1 => __DIR__ . '/..' . '/homework/psr4',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1ab9c0427bc1121fd4644ddf28bbd7bb::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
