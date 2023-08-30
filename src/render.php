<?php

namespace App;

use App\Connection;
use App\Image;

final class Render {
    private $connection;
    private string $images;

    public function __construct()
    {
        $this -> images = '';
        $this -> connection = new Connection();
        $this -> connection -> start();
    }

    public function start() {
        $query = $this -> connection -> connect -> prepare(
            "SELECT * FROM src"
        );

        if($query -> execute()) {
            $result = $query -> fetchAll();

            foreach($result as $item) {
                $image = new Image($item['id'],$item['path'], 'Gallery Image');
                $this -> images = $this -> images.$image();
            }

            echo $this -> images;
        }
        else {
            echo "<h2>There is an error in your connection to our database !!!</h2>";
        }

    }
}