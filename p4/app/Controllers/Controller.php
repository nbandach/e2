<?php

namespace App\Controllers;

class Controller
{
    public function __construct($app)
    {
        $this->app = $app;
    }

    public function history () {
        return $this->app->view('history');
    }

    public function details () {
        return $this->app->view('details');;
    }
}
