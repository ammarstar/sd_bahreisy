<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="images/halamansekolah.jpg">
    <title>SD Bahreisy</title>
    <style media="screen">
      body{
        background: #C0C0C0;
      }
    </style>
  </head>
  <body>
<h1>masuk ke akun sekolah <br>sd bahreisy </h1>
<div class="kotak_login ">
    <button onClick="kembali()" ><i class="bi bi-arrow-left"></i> </button>
    <h3> >>> Halaman Register</h3>
    <form class="login_form" method="post">
      <label for="nama">Nama Lengkap</label>
      <input type="text" class="login_input" placeholder="masukkan nama anda" name="nama" value="" required>
      <label for="email">Email</label>
      <input type="text" class="login_input" placeholder="masukkan email anda" name="surel" value="" required>
      <label for="pass">Password</label>
      <input type="password" class="login_input" placeholder="masukkan sandi" name="sandi" value="" required>
      <button type="submit" class="login_tombol" name="register">Register</button>
    </form>
    <?php
    session_start();
      include 'koneksi/connect.php';
      if (isset($_POST['register'])) {
        $query=mysqli_query($link, "insert into tbl_user values(null,
                                                                '".$_POST['nama']."',
                                                                '".$_POST['surel']."',
                                                                '".$_POST['sandi']."')");
        if ($query) {
          echo "berhasil Simpan Data";
        }
        else {
          echo "Gagal Simpan Data";
        }
      }
     ?>
</div>
<script type="text/javascript" src="login.js">
</script>



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
