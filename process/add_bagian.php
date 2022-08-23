<?php 
session_start(); 
include "../connect/db_conn.php";

if (isset($_POST['add_bagian'])) {
		

        
		$sql = "INSERT INTO bagian(`nama_bagian`,`no_telp`,`desc`) VALUES ('".$_POST['nama_bagianadd']."','".$_POST['teleponadd']."','".$_POST['deskripsiadd']."')";

		$result = mysqli_query($conn, $sql);

        header("Location: ../views/bagian.php?success=Sukses");
}else{
	header("Location: ../views/bagian.php?error=Error");
	exit();
}