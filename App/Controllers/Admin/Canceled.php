<?php
namespace App\Controllers\Admin;

use App\Controller;

class Canceled extends Controller
{
    protected function handle()
    {
        static::redirect('/admin');
    }
}
