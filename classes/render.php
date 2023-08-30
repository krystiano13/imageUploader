<?php

namespace App;

use App\Connection;
use App\Image;

final class Render {
    private $connection;

    public function __construct()
    {
        $this -> connection = new Connection();
        $this -> connection -> start();
    }

    public function start() {
        $query = $this -> connection -> connect -> prepare(
            "SELECT * FROM src"
        );

        if($query -> execute()) {
            $result = $query -> fetchAll(\PDO::FETCH_COLUMN);
        }
        else {
            echo "<h2>There is an error in your connection to our database !!!</h2>";
        }

    }
}