<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38264d6c15627e32269ce154af8c520b
{
    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'Jaguar' => 
            array (
                0 => __DIR__ . '/..' . '/hyyan/jaguar/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit38264d6c15627e32269ce154af8c520b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
