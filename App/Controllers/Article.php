<?php

namespace App\Controllers;

use App\Controller;
use App\Exceptions\ErrorException;
use App\Models\Article as ArticleModel;

/**
 * Class Article
 * @package App\Controllers
 */
class Article extends Controller
{
    /**
     * @return void
     * @throws ErrorException
     * @throws \App\Exceptions\DbException
     */
    public function handle()
    {
        $id = $this->data['prop'];
        if (false === $this->view->article = ArticleModel::findById($id)) {
            throw new ErrorException('Error 404 - Article with such id <b>' .
                $id . '</b> not found');
        }
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}
