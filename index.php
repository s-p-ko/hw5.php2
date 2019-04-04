<?php

require __DIR__ . '/autoload.php';

use App\Exceptions\BaseException;
use App\Exceptions\ErrorException;
use App\Exceptions\DbException;
use App\Exceptions\ControllerNotFoundException;
use App\Controllers\Error404;

$parts = explode('/', $_SERVER['REQUEST_URI']);
$name = (!empty($parts[1])) ? ucfirst($parts[1]) : 'Index';
$classController = '\App\Controllers\\' . $name;
$path = __DIR__ . '/' . str_replace('\\', '/', $classController) . '.php';

try {
    if (!class_exists($classController)) {
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
