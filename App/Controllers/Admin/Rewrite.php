<?php
namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

class Rewrite extends Controller
{
    protected function handle()
    {
        $article = Article::findById($_POST['id']);
        $article->fill($_POST);
        $article->save();
        static::redirect('/admin');
    }
}
