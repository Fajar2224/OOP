<?php

include_once "../class/siswa.php";

$Siswa=new Siswa();
if($data=$Siswa->cari_data_siswa_by_id($_GET['id']))
{

  echo "{$data['nama']}<br>";
  echo'<img src="../img/'.$data['unik_id'].'.png">';
}