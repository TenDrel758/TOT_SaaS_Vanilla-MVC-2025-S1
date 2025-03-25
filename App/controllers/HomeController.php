<?php

namespace App\controllers;

class HomeController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function __index() {

        loadView('home', []);
    }
}