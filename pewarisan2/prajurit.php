<?php

class prajurit
{
    protected $p_nama;
    protected $p_power;

    public function get_nama()
    {
        echo $this->p_nama."<br>";
    }
    public function set_nama($a_nama)
    {
        $this->p_nama=$a_nama;
    }
 public function set_power($a_power)
 {
     $this->p_power=$a_power;
 }
 
}