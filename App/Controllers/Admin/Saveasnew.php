<?php

namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

/**
 * Class Saveasnew
 * @package App\Controllers\Admin
 */
class Saveasnew extends Controller
{
    /**
     * @return void
     * @throws \App\Core\MultiException
     * @throws \App\Exceptions\DbException
     * @throws \App\Exceptions\MultiException
     */
    protected function handle()
    {
        $article = new Article();
        $article->fill($_POST);
        $article->insert();
        static::redirect('/admin');
    }
}
