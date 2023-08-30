<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite25c178f84f017a2ed30d35a1365ca66
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInite25c178f84f017a2ed30d35a1365ca66', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite25c178f84f017a2ed30d35a1365ca66', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite25c178f84f017a2ed30d35a1365ca66::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}