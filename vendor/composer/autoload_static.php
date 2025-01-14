<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37c9f56c1363ea64a8a6ed2bb752fa30
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit37c9f56c1363ea64a8a6ed2bb752fa30::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit37c9f56c1363ea64a8a6ed2bb752fa30::$classMap;

        }, null, ClassLoader::class);
    }
}
