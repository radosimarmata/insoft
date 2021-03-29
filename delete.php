<?php 
// koneksi database
include 'connect.php';
 
// menangkap data id yang di kirim dari url
$BOOKID = $_GET['BOOKID'];
 
 
// menghapus data dari database
mysqli_query($connect,"delete from books where BOOKID='$BOOKID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>