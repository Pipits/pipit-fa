<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit260330838d2f0789aef4d157569c5ac3
{
    public static $classMap = array (
        'FontAwesomeSVG' => __DIR__ . '/..' . '/husseinalhammad/fontawesome-svg/src/FontAwesomeSVG.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit260330838d2f0789aef4d157569c5ac3::$classMap;

        }, null, ClassLoader::class);
    }
}
