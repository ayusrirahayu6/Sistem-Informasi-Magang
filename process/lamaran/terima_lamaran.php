<?php
session_start(); 
include "../../connect/db_conn.php";

if(isset($_POST["idlamaran"]))
{
  $id = $_POST['idlamaran'];

  $getlamaran = "SELECT * FROM lamaran WHERE id = '".$_POST['idlamaran']."'";
  $query_lamaran = mysqli_query($conn, $getlamaran);
  $data_lamaran = mysqli_fetch_assoc($query_lamaran);

  $idlow = $data_lamaran['id_lowongan'];
  $query_kurang = "UPDATE `info_magang` SET `kuota`= kuota- 1 WHERE id = '".$idlow."'";

  $kurangi_quota = mysqli_query($conn, $query_kurang);

  $query = mysqli_query($conn, "UPDATE `lamaran` SET `status`= 1 WHERE id = '".$id."'");   
  
    header("Location: ../../views/lamaran.php?success=Sukses");
    exit();
}else{
	header("Location: ../../views/lamaran.php?error=Error");
	exit();
}
?>