<?php
/**
 * For autoloading classes
 * @param string $class
 */
spl_autoload_register(
    function ($class) {
        $file = str_replace('\\', '/', $class) . '.php';
        require __DIR__ . '/' . $file;
    }
);