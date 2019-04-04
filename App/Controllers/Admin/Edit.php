<?php
namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

class Edit extends Controller
{
    protected function handle()
    {
        $id = $this->data['data'];
        $this->view->article = Article::findById($id);
        $this->view->display(__DIR__ . '/../../../templates/admin/edit.php');
    }
}

