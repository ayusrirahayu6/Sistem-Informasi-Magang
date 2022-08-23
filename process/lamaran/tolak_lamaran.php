<?php
session_start(); 
include "../../connect/db_conn.php";

if(isset($_POST["idlamaran"]))
{
  $id = $_POST['idlamaran'];
  $query = mysqli_query($conn, "UPDATE `lamaran` SET `status`= 2 WHERE id = '".$id."'");   
  
    header("Location: ../../views/lamaran.php?success=Sukses");
    exit();
}else{
	header("Location: ../../views/lamaran.php?error=Error");
	exit();
}
?>