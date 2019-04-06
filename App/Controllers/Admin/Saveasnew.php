<?php

namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

class Saveasnew extends Controller
{
    protected function handle()
    {
        $article = new Article();
        $article->fill($_POST);
        $article->insert();
        static::redirect('/admin');
    }
}
