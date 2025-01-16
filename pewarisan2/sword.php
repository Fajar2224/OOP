<?php

include "prajurit.php";

class sword extends prajurit

{
    protected $zirah;
    protected $kuda;

    public function set_zirah($a_zirah)
    {
        $this->zirah=$a_zirah;
    }
    public function set_kuda($a_kuda)
    {
        $this->kuda=$a_kuda;
    }
    public function get_nama()
    {
        echo $this->p_nama."<br>";
        echo "Serang musuh";
    }
} 