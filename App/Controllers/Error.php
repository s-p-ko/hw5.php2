<?php

namespace App\Controllers;

use App\Controller;

/**
 * Class Error404
 * @package App\Controllers
 */
class Error extends Controller
{
    /**
     * @return void
     */
    protected function handle()
    {
        $this->view->message = $this->data['message'];
        $this->view->display(__DIR__ . '/../../templates/error.php');
    }
}
