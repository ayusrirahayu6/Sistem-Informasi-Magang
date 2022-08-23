<?php
session_start(); 
include "../connect/db_conn.php";

if(isset($_POST["kirimdoc"]))
{
  $id_user = $_SESSION['userr']['id_daftar'];
  $id_low = $_POST['kirimdoc'];

  $date = date('Y-m-d H:i:s');
  $file       = $_FILES["inputfile"]["name"];
  $tmp_name   = $_FILES["inputfile"]["tmp_name"];
  $path="../../admin/document/".$file;
  $file1=explode(".",$file);
  $ext=$file1[1];
  $allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
  $q = "INSERT INTO `lamaran`(`id_user`, `id_lowongan`, `status`, `file`) VALUES ($id_user,$id_low,0,'".$file."')";

  if(in_array($ext,$allowed))
  {
    $move = move_uploaded_file($tmp_name,$path);
    $query = mysqli_query($conn, $q);   
  }
  header("Location: ../home.php");
}else{
    echo "<script> alert('Gagal Upload Dokumen')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../views/kirim_dokumen.php'>";
}
?>