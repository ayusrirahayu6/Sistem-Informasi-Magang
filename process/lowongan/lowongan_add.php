<?php
session_start(); 
include "../../connect/db_conn.php";

if(isset($_POST["add_lowongan"]))
{
  $bagian = $_POST['bagian'];
  $nama = $_POST['nama_low'];
  $kuota = $_POST['kuota'];

  $query = "INSERT INTO `info_magang`(`id_bagian`, `nama`, `kuota`, `status`) VALUES (".$bagian.",'".$nama."',".$kuota.",1)";

  $query = mysqli_query($conn, $query);   
    header("Location: ../../views/lowongan.php?success=Sukses");
    exit();
}else{
	header("Location: ../../views/lowongan.php?error=Error");
	exit();
}
?>