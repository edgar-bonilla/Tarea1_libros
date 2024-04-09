<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit071586d19f5409de22b3235d85d8476c
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/mustache/mustache/src',
            ),
        ),
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit071586d19f5409de22b3235d85d8476c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit071586d19f5409de22b3235d85d8476c::$classMap;

        }, null, ClassLoader::class);
    }
}
