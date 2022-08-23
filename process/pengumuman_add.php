<?php
session_start(); 
include "../connect/db_conn.php";

if(isset($_POST["add_pengumuman"]))
{
  $judul = $_POST['judul'];
  $desc = $_POST['desc'];
  $date = date('Y-m-d H:i:s');
  $file       = $_FILES["doc_pengumuman"]["name"];
  $tmp_name   = $_FILES["doc_pengumuman"]["tmp_name"];
  $path="../document/".$file;
  $file1=explode(".",$file);
  $ext=$file1[1];
  $allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
  if(in_array($ext,$allowed))
  {
    $move = move_uploaded_file($tmp_name,$path);
    $query = mysqli_query($conn, "INSERT INTO `pengumuman`(`title`, `desc`, `date`, `dokumen`) VALUES ('".$judul."','".$desc."','".$date."','".$file."')");   
  }
    header("Location: ../views/pengumuman.php?success=Sukses");
    exit();
}else{
	header("Location: ../views/pengumuman.php?error=Error");
	exit();
}
?>