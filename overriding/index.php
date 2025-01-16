<?php

include "sniper.php";

$Zero=new Hero();
$Zero->set_nama("Captain"); 
$Zero->set_health(99);
$Zero->set_attack(10);
$Zero->get_status();

$Decade=new Sniper();
$Decade->set_nama('Trooper');
$Decade->set_health(80);
$Decade->set_attack(5);
$Decade->get_status();