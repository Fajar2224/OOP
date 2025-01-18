<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="unik_id" id="unik_id" placeholder="Masukkan Unik ID">
        <button type="submit" >Cari</button>

    </form>
    <!-- Tampilan Data Siswa -->
     <?php
     include_once "class/siswa.php";
     include_once "class/absen.php";
     
     if(isset($_POST['unik_id'])){
        $Siswa=new Siswa();

        if($data=$Siswa->cari_data_siswa_by_unik_id($_POST['unik_id']))
        {
         echo"Nama:{$data['nama']}<br>";
         echo"NISN:{$data['nisn']}<br>";
         echo"Kelas:{$data['kelas']}<br>";
         $Absen= new Absen ();
         $Absen->simpan_absen($data['id']);
        }
        else{
            echo"<h1> Data Tidak Ditemukan</h1>";
        }
     }
     ?>
</body>
</html>