<?php

namespace App;

class Cafe extends VillaPeruana
{

    public function __construct($name, $quality, $sellIn)
    {
        parent::__construct($name,$quality,$sellIn);
    }

    public function tick()
    {
        if ($this->quality > 0) {
            $this->quality = $this->quality - 2;
        } 
    }
}
