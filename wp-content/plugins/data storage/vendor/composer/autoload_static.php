<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9a6269e149d12e70b528f62395ff7e8
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9a6269e149d12e70b528f62395ff7e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9a6269e149d12e70b528f62395ff7e8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
