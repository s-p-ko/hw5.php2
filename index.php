<?php

require __DIR__ . '/autoload.php';

use App\Controllers\Error404;
use App\Exceptions\BaseException;
use App\Exceptions\ControllerNotFoundException;
use App\Exceptions\DbException;
use App\Exceptions\ErrorException;

$parts = explode('/', $_SERVER['REQUEST_URI']);
$name = (!empty($parts[1])) ? ucfirst($parts[1]) : 'Index';
$classController = '\App\Controllers\\' . $name;
$path = __DIR__ . '/' . str_replace('\\', '/', $classController) . '.php';

try {
    if (!is_readable($path)) {
        throw new ControllerNotFoundException ($classController . ' - Such Controller Not Found');
    }
    $controller = new $classController;
    $controller->data = (!empty($parts[2])) ? $parts[2] : null;
    $controller();
} catch (DbException | ErrorException | BaseException | ControllerNotFoundException $e) {
    (new \App\Logger())->error($e);
    $controller = new Error404();
    $controller->message = $e->getMessage();
    $controller();
}
