<?php 
session_start(); 
include "../connect/db_conn.php";

if (isset($_POST['id_pendaftar'])) {
    $sql = "DELETE FROM daftar WHERE id_daftar = '".$_POST['id_pendaftar']."'";
    $result = mysqli_query($conn, $sql);

    return $result;
}else{
	exit();
}