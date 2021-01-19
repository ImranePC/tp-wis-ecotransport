<?php

namespace App;

/**
 * Autoload charge les classes requises automatiquement.
 * @package App
 */
class Autoload
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier des classes requises, ne prend pas les classes hors du namespace App.
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class)
    {
        if (strpos($class,__NAMESPACE__ . '\\') === 0)
        {
            $class = str_replace(__NAMESPACE__. '\\', '', $class);
            $class = str_replace('\\','/', $class);
            require 'class/' . $class . '.php';
        }
    }
}