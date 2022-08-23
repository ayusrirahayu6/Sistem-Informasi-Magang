<?php
session_start(); 
include "../../connect/db_conn.php";

if(isset($_POST["edit_lowongan"]))
{
  $id = $_POST['id'];
  $nama = $_POST['nama_low'];
  $bagian = $_POST['bagian'];
  $kuota = $_POST['kuota'];
  $query = mysqli_query($conn, "UPDATE `info_magang` SET `id_bagian`='".$bagian."',`nama`='".$nama."',`kuota`='".$kuota."',`status`= 1 WHERE id = '".$id."'");   
  
    header("Location: ../../views/lowongan.php?success=Sukses");
    exit();
}else{
	header("Location: ../../views/lowongan.php?error=Error");
	exit();
}
?>