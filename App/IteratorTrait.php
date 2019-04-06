<?php

namespace App;

/**
 * Trait IteratorTrait
 * @package App
 */
trait IteratorTrait
{

    protected $prop;

    /**
     * Return the current element
     * @return mixed Can return any type.
     */
    public function current()
    {
        return current($this->prop);
    }

    /**
     * Move forward to next element
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        next($this->prop);
    }

    /**
     * Return the key of the current element
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return key($this->prop);
    }

    /**
     * Checks if current position is valid
     * @return boolean
     */
    public function valid()
    {
        return null !== key($this->prop);
    }

    /**
     * Rewind the Iterator to the first element
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        reset($this->prop);
    }
}
