<?php
namespace App;

abstract class Controller
{
    protected $view;

    use MagicTrait;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->view  = new View();
    }

    /**
     * @return bool
     */
    protected function access() : bool
    {
        return true;
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
     * @param string $path
     */
    protected static function redirect(string $path)
    {
        header('Location: ' . $path);
        exit;
    }

    /**
     * @return mixed
     */
    abstract protected function handle();
}
