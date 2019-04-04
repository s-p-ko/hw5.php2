<?php
namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

class Delete extends Controller
{
    protected function handle()
    {
        $id = $this->data['data'];
        $article = Article::findById($id);
        $article->delete();
        static::redirect('/admin');
    }
}
