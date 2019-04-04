<?php
namespace App\Controllers;

use App\Controller;

class Error404 extends Controller
{
    protected function handle()
    {
        $this->view->message = $this->data['message'];
        $this->view->display(__DIR__ . '/../../templates/404.php');
    }
}
