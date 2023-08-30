<?php

namespace App;

use App\Connection;

final class Upload {
    public function send() {
        $result = $_FILES;
        if(!isset($result['img'])) return;

        $result = $_FILES['img'];
        $code = $result['error'];
        $uniqId = uniqid("i",true);

        if($code !== UPLOAD_ERR_OK) {
            echo "Error occured when Uploading images !!!";
        }

        else {
            $connection = new Connection();
            $connection -> start();

            $query = $connection -> connect -> prepare(
                "INSERT INTO src VALUES(NULL,:src)"
            );

            $query -> bindValue(':src','./src/images/'.$uniqId.$result['name']);

            if(!$query -> execute()) {
                echo "Error occured when Uploading images !!!"; 
            }

            move_uploaded_file($result['tmp_name'],__DIR__.'/images/'.$uniqId.$result['name']);
        }

    }
}