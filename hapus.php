<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim ke url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>