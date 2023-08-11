<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../images/halamansekolah.jpg">
    <title>Halaman Admin</title>
  </head>
  <style media="screen">
    .admin-kepala{
      height: 100px;
      text-align: center;
      padding-top: 50px;
    }
    .admin-contents img{
      width: 750px;
    }
    .judul{
      width: 180px;
    }
    .isi{
      text-align: justify;
    }
  </style>
  <body>
<!-- header -->
<div class="container">
  <div class="admin-kepala">
    <h6>halaman admin home</h6>
  </div>
  <!--navbar  -->
  <div class="navbar navbar-expand-lg navbar-dark bg-info">
    <a href="admin_index.php" class="navbar-brand">Admin</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#ikonkecil" name="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="ikonkecil">
      <div class="navbar-nav mr-auto">
        <a href="admin_index.php" class="nav-link">Home</a>
        <div class="dropdown">
          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" name="button">Galeri</button>
          <div class="dropdown-menu">
            <a href="admin_bonbin.php" class="dropdown-item">kebun Binatang</a>
            <a href="#" class="dropdown-item">Sholat Dhuha</a>
          </div>
        </div>
        <a href="#" class="nav-link">Rubah</a>
        <a href="?keluar" class="nav-link">Log-Out</a>
      </div>
      <?php
      if (isset($_GET['keluar'])) {
        header('location:../index.php');
      }
       ?>
    </div>
  </div>
  <!-- contents -->
  <div class="admin-contents">
    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Gambar</th>
        <th>Pilihan</th>
      </tr>
      <?php
      include '../koneksi/connect.php';
      $no=1;
      $query=mysqli_query($link, "SELECT * FROM tbl_utama");
      while ($outputan=mysqli_fetch_assoc($query)) {
      ?>
      <tr>
        <td><?php echo $no++; ?>  </td>
        <td class="judul"><?php echo $outputan['judul']; ?>  </td>
        <td class="isi"><?php echo $outputan['isi']; ?>  </td>
        <td><img src="../tampung/<?php echo $outputan['gambar'] ?>" class="img-fluid" alt=""> </td>
        <td>
          <a href="e_index.php?edit=<?php echo $outputan['id']; ?>"><i class="bi bi-pencil-fill"></i></a>
          <a href="h_index.php?hapus=<?php echo $outputan['id']; ?>" onclick="return confirm('Yakin akan menghapus data?')"><i class="bi bi-trash-fill"></i></a>
        </td>
      </tr>
      <?php
      }
       ?>
    </table>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->
<script type="text/javascript" src="../ckeditor/ckeditor.js">
</script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
