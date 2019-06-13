<?php

namespace App\Models;

use App\Exceptions\ModelValueException;
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

    /**
     * @param $value
     * @return $this
     * @throws AApp\Exceptions\ModelValueException
     */
    public function validateTitle($value)
    {
        if (empty($value)) {
            throw new ModelValueException('The title cannot be empty!');
        } else {
            if (strlen($value) > 100) {
                throw new ModelValueException('Too many chars in the title (more than 100)');
            }
        }
        $this->title = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     * @throws App\Exceptions\ModelValueException
     */
    public function validateContent($value)
    {
        if (!isset($value)) {
            throw new ModelValueException('The content is absent!');
        } elseif (!is_string($value) ) {
            throw new ModelValueException('Thre are no text in the article');
        } else {
            if (strlen($value) < 30) {
                throw new ModelValueException('Too little chars in the content of the article (less than 30)');
            }
            if (strlen($value) > 10000) {
                throw new ModelValueException('Too many chars in the content of the article (more than 10000)');
            }
        }
        $this->content = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     * @throws App\Exceptions\ModelValueException
     */
    public function validateId($value)
    {
        if (empty($value)) {
            throw new ModelValueException('The article\'s id is absent!');
        }
        $this->content = $value;
        return $this;
    }

}
