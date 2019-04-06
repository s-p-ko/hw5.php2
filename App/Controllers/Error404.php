<?php

namespace App\Controllers;

use App\Controller;

/**
 * Class Error404
 * @package App\Controllers
 */
class Error404 extends Controller
{
    /**
     * @return void
     */
    protected function handle()
    {
        $this->view->message = $this->data['message'];
        $this->view->display(__DIR__ . '/../../templates/404.php');
    }
}
