<?php


namespace core;


class View
{
    public function render($pageView, $templateView)
    {
        include_once 'views' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . $templateView;
    }
}