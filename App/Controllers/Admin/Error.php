<?php

namespace App\Controllers\Admin;

use App\Controller;

class Error extends Controller
{
    protected function handle()
    {
        $this->view->message = $this->data['message'];
        $this->view->display(__DIR__ . '/../../../templates/admin/error.php');
    }
}
