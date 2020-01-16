<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfaa2c1babb3a41612d9bc7403149b9a
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KlarDak\\TelegramBot\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KlarDak\\TelegramBot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdfaa2c1babb3a41612d9bc7403149b9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdfaa2c1babb3a41612d9bc7403149b9a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
