<?php

namespace App;

class Ticket extends VillaPeruana
{

    public function __construct($name, $quality, $sellIn)
    {
        parent::__construct($name,$quality,$sellIn);
    }

    public function tick()
    {
        if ($this->quality < 50) {
            $this->quality = $this->quality + 1;

                if ($this->name == 'Ticket VIP al concierto de Pick Floid') {
                    if ($this->sellIn < 11) {
                        if ($this->quality < 50) {
                            $this->quality = $this->quality + 1;
                        }
                    }
                    if ($this->sellIn < 6) {
                        if ($this->quality < 50) {
                            $this->quality = $this->quality + 1;
                        }
                    }
                }
            }
        

        if ($this->sellIn < 0) {
            if ($this->quality < 50) {
                    $this->quality = $this->quality + 1;
            }
        }
    }
}
