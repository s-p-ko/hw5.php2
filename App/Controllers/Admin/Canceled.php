<?php

namespace App\Controllers\Admin;

use App\Controller;

/**
 * Class Canceled
 * @package App\Controllers\Admin
 */
class Canceled extends Controller
{
    /**
     * @return void
     */
    protected function handle()
    {
        $this->redirect('/admin');
    }
}
