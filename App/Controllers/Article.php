<?php
namespace App\Controllers;

use App\Controller;
use App\Exceptions\ErrorException;
use App\Models\Article as ArticleModel;

class Article extends Controller
{
    public function handle()
    {
        $id = $this->data['data'];
        if (false === $this->view->article = ArticleModel::findById($id)) {
            throw new ErrorException('Error 404 - Article with such id <b>' .
                $id . '</b> not found');
        }
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}
