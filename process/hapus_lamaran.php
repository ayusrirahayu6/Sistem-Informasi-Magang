<?php 
session_start(); 
include "../connect/db_conn.php";

if (isset($_POST['idlamaran'])) {
    $sql = "DELETE FROM lamaran WHERE id = '".$_POST['idlamaran']."'";
    $result = mysqli_query($conn, $sql);
    return $result;
}else{
	exit();
}