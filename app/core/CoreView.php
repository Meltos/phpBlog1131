<?php


namespace App\core;

use Twig;

class CoreView
{
    public $loader;
    public $twig;

    public function __construct()
    {
        $this->loader = new \Twig_Loader_Filesystem(ABSPATH.'/view');
    }
}