<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
        <a href="rubah.php" class="nav-link">Rubah</a>
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
  <?php
  include '../koneksi/connect.php';
  $id=$_GET['edit'];
  $query=mysqli_query($link, "SELECT * FROM tbl_utama where id='$id' ");
  $outputan=mysqli_fetch_assoc($query);
   ?>
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" placeholder="Judul Berita" class="form-control" name="judul" value="<?php echo $outputan['judul'] ?>">
      <label for="isi">Isi Berita</label>
      <textarea name="isi" class="ckeditor form-control" rows="10" style="resize:none;"><?php echo $outputan['isi'] ?></textarea>
      <input type="text" placeholder="nama gambar" class="mt-3" name="nama_gambar" value="">
      <input type="file" name="gambar" value="">
    </div>
    <button type="submit" class="btn btn-info mb-5" name="simpan" onclick="return confirm('yakin untuk dirubah?')">Simpan</button>
  </form>
  <?php
    if (isset($_POST['simpan'])) {
      $perbarui=mysqli_query($link, "UPDATE tbl_utama set judul='".$_POST['judul']."',
                                                          isi='".$_POST['isi']."' where id='$id' ");
      if ($perbarui) {
        header('location:r_index.php');
        echo "Berhasil Simpan";
      }
      else {
        echo "Gagal Simpan";
      }
    }
   ?>
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
