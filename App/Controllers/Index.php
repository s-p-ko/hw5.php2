<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;

/**
 * Class Index
 * @package App\Controllers
 */
class Index extends Controller
{
    /**
     * @return void
     * @throws \App\Exceptions\DbException
     */
    protected function handle()
    {
        $this->view->articles = Article::findAll();
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }
}
