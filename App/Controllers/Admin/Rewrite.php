<?php

namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

/**
 * Class Rewrite
 * @package App\Controllers\Admin
 */
class Rewrite extends Controller
{
    /**
     * @return void
     * @throws \App\Exceptions\DbException
     */
    protected function handle()
    {
        $article = Article::findById($_POST['id']);
        $article->fill($_POST);
        $article->save();
        static::redirect('/admin');
    }
}
