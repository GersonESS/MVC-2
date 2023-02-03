<?php

class View
{
    public function render($content)
    {
        echo "<h1>" . "$content" . "</h1>";
    }
}