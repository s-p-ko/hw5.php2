<?php

namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

/**
 * Class Save
 * Saves edited article as new one
 * @package App\Controllers\Admin
 */
class Save extends Controller
{
    /**
     * @return void
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
