<?php

namespace App\Exceptions;

/**
 * Class MultiException
 * @package App\Exceptions
 */
class MultiException extends BaseException
{
    protected $errors = [];

    public function add(BaseException $e)
    {
        $this->errors[] = $e;
    }

    public function all()
    {
        return $this->errors;
    }

    public function empty()
    {
        return empty($this->errors);
    }
}
