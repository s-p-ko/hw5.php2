<?php

namespace App;

/**
 * Class View
 * @package App
 */
class View implements \Countable, \Iterator
{
    protected $data = [];

    use MagicTrait, IteratorTrait, CountableTrait;

    /**
     * @param $template string path to the template
     */
    public function display($template)
    {
        echo $this->render($template);
    }

    /**
     * @param $template string path to the template
     * @return string
     */
    public function render($template)
    {
        ob_start();
        foreach ($this->data as $prop => $value) {
            $$prop = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}
