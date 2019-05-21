<?php

namespace App;

/**
 * Class Controller
 * @package App
 */
abstract class Controller
{
    protected $view;

    use MagicTrait;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * @param string $path
     */
    protected function redirect(string $path)
    {
        header('Location: ' . $path);
        exit;
    }

    /**
     * @return mixed
     */
    public function __invoke()
    {
        if ($this->access()) {
            return $this->handle();
        }
        throw new BaseException('Access closed');
    }

    /**
     * @return bool
     */
    protected function access(): bool
    {
        return true;
    }

    /**
     * @return mixed
     */
    abstract protected function handle();
}
