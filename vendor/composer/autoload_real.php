<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbdf3bbea94cd189a58274e8e88aaaa10
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitbdf3bbea94cd189a58274e8e88aaaa10', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbdf3bbea94cd189a58274e8e88aaaa10', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbdf3bbea94cd189a58274e8e88aaaa10::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
