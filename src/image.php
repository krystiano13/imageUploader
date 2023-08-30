<?php

namespace App;

final class Image {
    public int $id;
    public string $src;
    public string $alt;

    public function __construct($id,$src, $alt)
    {   
        $this -> id = $id;
        $this -> src = $src;
        $this -> alt = $alt;    
    }

    public function __invoke():string
    {
        return '<img id="'.(string)$this -> id.'" src="'. $this -> src .'" alt="'. $this -> alt .'" />';
    }
}