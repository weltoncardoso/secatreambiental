<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e14033aeeb2cf644e438d9c8b142acf
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PagSeguro\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PagSeguro\\' => 
        array (
            0 => __DIR__ . '/..' . '/pagseguro/pagseguro-php-sdk/source',
        ),
    );

    public static $classMap = array (
        'MP' => __DIR__ . '/..' . '/mercadopago/sdk/lib/mercadopago.php',
        'MPRestClient' => __DIR__ . '/..' . '/mercadopago/sdk/lib/mercadopago.php',
        'MercadoPagoException' => __DIR__ . '/..' . '/mercadopago/sdk/lib/mercadopago.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e14033aeeb2cf644e438d9c8b142acf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e14033aeeb2cf644e438d9c8b142acf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e14033aeeb2cf644e438d9c8b142acf::$classMap;

        }, null, ClassLoader::class);
    }
}
