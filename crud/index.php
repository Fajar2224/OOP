<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR OOP CRUD</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
        <a href="view/siswa/tambah.php" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
  </div>
  <div class="container">
  <div class="row mt-3">
    <div class="col-lg-12">
      <H1>DATA SISWA</H1>
      <table class="table table-stripped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Kelas</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once "class/siswa.php";

          $Siswa=new Siswa();
          $data_all=$Siswa->tampil_data_siswa_all();
          $no=1;
          foreach($data_all as $da)
          {
              echo "<tr>
              <td>$no</td>
              <td>$da[nama]</td>
              <td>$da[nisn]</td>
              <td>$da[kelas]</td>
              <td>
               <a href='controller/SiswaController.php?aksi=delete&id=$da[id]' class='btn btn-sm btn-danger'>Hapus</a>
              <a href='view/siswa/edit.php?id=$da[id]' class='btn btn-sm btn-warning'>Edit</a>
              </td>
              </tr>";
              $no++;
          }
          ?>
          </body>
        </table>
    </div>
  </div>
  </div>
 
  <script src="dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>