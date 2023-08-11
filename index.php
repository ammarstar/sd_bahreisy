<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/halamansekolah.jpg">
    <title>SD Bahreisy</title>
  </head>
  <body>
<div class="container-fluid">
<!-- navbar atas -->
  <div class="navbar navbar-expand-lg navbar-dark navbar_atas">
    <div class="container">
      <div class="navbar-nav mr-auto">
        031-3524854 | sds.bahreisy@gmail.com | Alamat: Ampel Kembang no.4a
      </div>
      <div class="navbar-nav ml-auto">
        <input type="text" class="form-control mr-sm-2" placeholder="search" name="" value="">
        <button type="submit" class="btn btn-success" name="button">Search</button>
      </div>
    </div>
  </div>
<!-- header -->
<div class="header">
  <img src="images/headerq.png" class="d-block w-100" alt="">
</div>
<!-- navbar bawah -->
<div class="navbar navbar-expand-lg navbar-dark navbar_bawah">
  <div class="container">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#ikonkecil" name="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="ikonkecil">
      <div class="navbar-nav mr-auto">
        <a href="index.php" class="nav-link">Home</a>
        <a href="profil.php" class="nav-link">Profil</a>
        <a href="persyaratan.php" class="nav-link">Pendaftaran</a>
        <a href="galeri.php" class="nav-link">Galeri</a>
        <a href="hubungi.php" class="nav-link">Hubungi Kami</a>
      </div>
      <div class="navbar-nav ml-auto ">
        <a href="login.php"> <img src="images/login.png" class="img-fluid" alt=""></a>
      </div>
    </div>
  </div>
</div>
<!-- spacer -->
<div class="navbar navbar-expand-lg navbar-dark bg-dark">
</div>
<!-- carousel -->
<div class="carousel slide" data-ride="carousel" id="geser">
  <ol class="carousel-indicators">
    <li data-target="#geser" data-slide-to="0" class="active"></li>
    <li data-target="#geser" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/studytour.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="images/dhuha2.jpg" class="d-block w-100" alt="">
    </div>
  </div>
</div>
<!-- content -->
<div class="content">
  <h6>berita terbaru</h6>
  <hr>
  <div class="row">
    <?php
    include 'koneksi/connect.php';
    $query=mysqli_query($link, "SELECT * FROM tbl_utama");
    while ($outputan=mysqli_fetch_assoc($query)) {
     ?>
    <div class="col-md-4">
      <img src="tampung/<?php echo $outputan['gambar'] ?>" class="d-block w-100" alt="gambar">
      <p><?php echo $outputan['isi']; ?></p>
    </div>
    <?php
      }
     ?>
  </div>
</div>
<!-- footer -->
<div class="footer">
  <div class="row">
    <div class="col-md">
      <ul class="nav flex-column">
        <a href="#" class="nav-link">Home</a>
        <a href="#" class="nav-link">Profil</a>
        <a href="#" class="nav-link">Pendaftaran</a>
        <a href="#" class="nav-link">Galeri</a>
        <a href="#" class="nav-link">Hubungi Kami</a>
      </ul>
    </div>
    <div class="col-md">
      <h5>Visi Sekolah</h5>
      <p>Unggul Dalam Prestasi Berdasarkan Imtaq dan Iptek, Berakhlaqul karimah, Terampil Dan Mandiri.</p>
      <h5>Misi Sekolah</h5>
      <ol>
        <li>Mengembankan sumber daya secara optimal dalam rangka mempersiapkan di era global</li>
        <li>Menengembangkan spiritual emosional dan intelektual siswa secara menyeluruh</li>
      </ol>
    </div>
    <div class="col-md">
      <h5>SD Bahreisy</h5>
      <p>Jl. Ampel Kembang 4A Surabaya 60151 <br>
          Telp : 031 3524854 <br>
          email : sds.bahreisy@gmail.com</p>
    </div>
  </div>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

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
