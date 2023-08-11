<?php
include '../koneksi/connect.php';
$id=$_GET['hapus'];
$query=mysqli_query($link, "DELETE FROM tbl_utama where id='$id' ");

if ($query) {
  header('location:admin_index.php');
}
else {
  echo "Gagal Hapus Data";
}
 ?>
