<?php

class Hero1
{
    private $p_nama;
    private $p_health;
    private $p_attack;

    public function set_nama($a_nama)
    {
        $this->p_nama=$a_nama;
    }
    public function set_health($a_health)
    {
        $this->p_health=$a_health;
    }
    public function set_attack($a_attack)
    {
        $this->p_attack=$a_attack;
    }
    public function getStatus()
    {
        echo "Hero $this->p_nama.<br>";
        echo "Health $this->p_health.<br>";
        echo "attack $this->p_attack";
    }
}

$Zilong=new Hero1();
$Zilong->set_nama('Zilong');
$Zilong->set_health(80);
$Zilong->set_attack(7);
$Zilong->getStatus();