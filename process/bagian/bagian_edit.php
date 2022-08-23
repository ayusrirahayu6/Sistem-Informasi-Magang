<?php
session_start(); 
include "../../connect/db_conn.php";

if(isset($_POST["edit_bagian"]))
{
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $notelp = $_POST['no_telp'];
  $desc = $_POST['desc'];
  $query = mysqli_query($conn, "UPDATE `bagian` SET `nama_bagian`='".$nama."',`no_telp`='".$notelp."',`desc`='".$desc."' WHERE id = '".$id."'");   
  
    header("Location: ../../views/bagian.php?success=Sukses");
    exit();
}else{
	header("Location: ../../views/bagian.php?error=Error");
	exit();
}
?>