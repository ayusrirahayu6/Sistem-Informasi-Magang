<?php 
session_start(); 
include "../connect/db_conn.php";

if (isset($_POST['idmagang'])) {
    $sql = "DELETE FROM info_magang WHERE id = '".$_POST['idmagang']."'";
    $result = mysqli_query($conn, $sql);
    return $result;
}else{
	exit();
}