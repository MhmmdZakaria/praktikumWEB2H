<?php

// koneksi database
include 'koneksi.php';

// Mengangkap Data yang dikirim dari form
$nama   = $_POST ['nama'];
$npm    = $_POST ['npm'];
$alamat = $_POST ['alamat'];

// Menginput Data ke Database
mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES (NULL, '$nama', '$npm', '$alamat')");

// Mengalihkan halaman kembali ke index.php
header("location:index.php");

?>