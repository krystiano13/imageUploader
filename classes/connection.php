<?php
namespace App;

use App\Config;

class Connection {
    public $connect;

    public function start() {
        $this -> connect = new \PDO(
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