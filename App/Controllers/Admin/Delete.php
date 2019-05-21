<?php

namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

/**
 * Class Delete
 * @package App\Controllers\Admin
 */
class Delete extends Controller
{
    /**
     * @return void
     * @throws \App\Exceptions\DbException
     */
    protected function handle()
    {
        $id = $this->data['prop'];
        $article = Article::findById($id);
        $article->delete();
        $this->redirect('/admin');
    }
}
