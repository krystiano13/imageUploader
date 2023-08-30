<?php

namespace App;
require_once '../vendor/autoload.php';

use App\Config;

class Connection {
    public $connection;

    public function start() {
        $this -> connection = new \PDO(
            "mysql:host=".Config::$host.";dbname=".Config::$dbName.";",
            Config::$username,
            Config::$password,
            [
                \PDO::ATTR_EMULATE_PREPARES => false,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        );
    }
}