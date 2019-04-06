<?php

namespace App\Models;

use App\Model;

/**
 * Class Article
 * @package App\Models
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $author_id
 * @property Author $author
 */
class Article extends Model
{
    protected const TABLE = 'news';
    public $title;
    public $content;
    public $author_id;

    /**
     * @param $name string
     * @return Author|null object of class Author
     */
    public function __get($name)
    {
        if ('author' === $name && !empty($this->author_id)) {
            return Author::findById($this->author_id);
        }
        return null;
    }

    /**
     * @param $name string
     * @return bool
     */
    public function __isset($name)
    {
        return ('author' === $name) ? !empty($this->author_id) : false;
    }
}
