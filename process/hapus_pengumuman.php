<?php 
session_start(); 
include "../connect/db_conn.php";

if (isset($_POST['idpengumuman'])) {
    $sql = "DELETE FROM pengumuman WHERE id = '".$_POST['idpengumuman']."'";
    $result = mysqli_query($conn, $sql);
    return $result;
}else{
	exit();
}