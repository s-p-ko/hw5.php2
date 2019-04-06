<?php

namespace App;

/**
 * Class Config
 * @package App
 */
class Config
{
    protected static $instance;
    public $data;

    /**
     * Config constructor.
     */
    protected function __construct()
    {
        $configPath = __DIR__ . '/../config.php';
        $this->data = include($configPath);
    }

    /**
     * @return Config
     */
    public static function instance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
