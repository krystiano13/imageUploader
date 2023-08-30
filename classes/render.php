<?php

namespace App;
require_once '../vendor/autoload.php';

use App\Connection;

final class Render {
    private $connection;

    public function __construct()
    {
        $this -> connection = new Connection();
        $this -> connection -> connect -> start();
    }
}