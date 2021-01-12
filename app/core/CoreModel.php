<?php


namespace App\core;


class CoreModel
{
    public $db;
    public $table;
    public $out=array();

    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASSWORD);
    }
}