<?php 
session_start(); 
include "../connect/db_conn.php";

if (isset($_POST['idbagian'])) {
    $sql = "DELETE FROM bagian WHERE id = '".$_POST['idbagian']."'";
    $result = mysqli_query($conn, $sql);
    return $result;
}else{
	exit();
}