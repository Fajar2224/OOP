<?php

include "hero.php";

class Sniper extends Hero
{
    public function get_status()
    {
        echo "Nama:$this->p_nama<br>";
        echo "Health:$this->p_health<br>";
        echo "Attack:$this->p_attack<br>";
        echo "waktunya bertarung";

        
    } 
}