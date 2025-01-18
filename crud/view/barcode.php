<?php

include_once "../class/siswa.php";
require "../vendor/autoload.php";
$Siswa=new Siswa();
if($data=$Siswa->cari_data_siswa_by_id($_GET['id']))
{
  echo"$data";
}