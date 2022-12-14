<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41c12b4ed4f564294f85fe78fddc8c40
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit41c12b4ed4f564294f85fe78fddc8c40::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41c12b4ed4f564294f85fe78fddc8c40::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit41c12b4ed4f564294f85fe78fddc8c40::$classMap;

        }, null, ClassLoader::class);
    }
}
