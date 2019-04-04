<?php
namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

class Add extends Controller
{
    protected function handle()
    {
            $article = new Article();
            $article->fill($_POST);
            $article->save();
            static::redirect('/admin');
    }
}
