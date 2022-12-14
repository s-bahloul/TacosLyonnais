<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4c10cc293d60db8980733e976de88f3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SBahloul\\ProjetTacosMvc\\' => 24,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SBahloul\\ProjetTacosMvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4c10cc293d60db8980733e976de88f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4c10cc293d60db8980733e976de88f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb4c10cc293d60db8980733e976de88f3::$classMap;

        }, null, ClassLoader::class);
    }
}
