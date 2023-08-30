<?php

namespace App;
require_once '../vendor/autoload.php';

final class Image {
    public string $src;
    public string $alt;

    public function __construct($src, $alt)
    {
        $this -> src = $src;
        $this -> alt = $alt;    
    }

    public function __invoke():string
    {
        return '<img src="'. $this -> src .'" alt="'. $this -> alt .'" />';
    }
}