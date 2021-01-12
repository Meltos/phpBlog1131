<?php


namespace Core;


class CoreController
{
    public function index()
    {
        echo 'index';
    }

    public function page()
    {
        echo '<h1>Page</h1>';
    }

    public function view($id)
    {
        echo "<h1>Page № $id</h1>";
    }
}