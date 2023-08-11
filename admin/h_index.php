<?php
include '../koneksi/connect.php';
$id=$_GET['hapus'];
$query1=mysqli_query($link, "SELECT * FROM tbl_utama where id='$id' ");
$hapus=mysqli_fetch_assoc($query1);
$foto=$hapus['gambar'];
$query=mysqli_query($link, "DELETE FROM tbl_utama where id='$id' ");
if (file_exists("../tampung/$foto")) {
  unlink("../tampung/$foto");
  ?>
  <script>
    alert('Data Berhasil dihapus');
    window.location.href="r_index.php";
  </script>
  <?php
}else {
  ?>
  <script>
    alert('Data Berhasil dihapus');
    window.location.href="r_index.php";
  </script>
  <?php
}
 ?>
