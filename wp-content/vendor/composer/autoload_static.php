<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14d2631ffb222bbf529cc9d8ae7addea
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit14d2631ffb222bbf529cc9d8ae7addea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14d2631ffb222bbf529cc9d8ae7addea::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit14d2631ffb222bbf529cc9d8ae7addea::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit14d2631ffb222bbf529cc9d8ae7addea::$classMap;

        }, null, ClassLoader::class);
    }
}
