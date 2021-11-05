<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit050ee66d15841121a0fc05ad5379e874
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit050ee66d15841121a0fc05ad5379e874::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit050ee66d15841121a0fc05ad5379e874::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit050ee66d15841121a0fc05ad5379e874::$classMap;

        }, null, ClassLoader::class);
    }
}