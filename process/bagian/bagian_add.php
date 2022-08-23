<?php
session_start(); 
include "../../connect/db_conn.php";

if(isset($_POST["add_bagian"]))
{
  $nama = $_POST['nama'];
  $notelp = $_POST['no_telp'];
  $desc = $_POST['desc'];

  $query = "INSERT INTO `bagian`(`nama_bagian`, `no_telp`, `desc`) VALUES ('".$nama."','".$notelp."','".$desc."')";
//   echo $query;
//   die;

  $query = mysqli_query($conn, $query);   
    header("Location: ../../views/bagian.php?success=Sukses");
    exit();
}else{
	header("Location: ../../views/bagian.php?error=Error");
	exit();
}
?>