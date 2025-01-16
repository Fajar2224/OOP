<?php

class Hero
{
    protected $p_nama;
    protected $p_health;
    protected $p_attack;

    public function get_status()
    {
        echo "Nama:$this->p_nama<br>";
        echo "Health:$this->p_health<br>";
        echo "Attack:$this->p_attack<br>";
    }
    public function set_nama($a_nama)
    {
        $this->p_nama=$a_nama;
    }
 public function set_health($a_health=0)
 {
     $this->p_health=$a_health;
 }
 public function set_attack($a_attack=0)
 {
     $this->p_attack=$a_attack;
 }
}