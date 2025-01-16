<?php

include "character.php";

class sniper extends character
{
    public function get_nama()
    {
        echo $this->p_nama;
    }
}