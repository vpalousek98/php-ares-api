<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0a931f8aeac40b7f44f4ce4f655e41d
{
    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'Ares' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitf0a931f8aeac40b7f44f4ce4f655e41d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
