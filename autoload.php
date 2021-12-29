<?php
/**
 * @author ofarukkesmez @ofke
 * @created_at 29.12.2021
 */

/**
 * All classes are autoloading to system
 */
spl_autoload_register(function($class) {
    $parts = explode('\\', $class);
    if (file_exists("app/Factories/".end($parts).'.php') == false) {
        return false;
    }
    require "app/Factories/".end($parts).'.php';
});

spl_autoload_register(function($class) {
    $parts = explode('\\', $class);
    if (file_exists("app/Platforms/".end($parts).'.php') == false) {
        return false;
    }
    require "app/Platforms/".end($parts).'.php';
});

spl_autoload_register(function($class) {
    $parts = explode('\\', $class);
    if (file_exists("app/".end($parts).'.php') == false) {
        return false;
    }
    require "app/".end($parts).'.php';
});
