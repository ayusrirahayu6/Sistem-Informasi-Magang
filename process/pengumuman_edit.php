<?php
session_start(); 
include "../connect/db_conn.php";

if(isset($_POST["edit_pengumuman"]))
{
  $id = $_POST['id'];
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
    $query = mysqli_query($conn, "UPDATE `pengumuman` SET `title`='".$judul."',`desc`='".$desc."',`date`='".$date."',`dokumen`='".$file."' WHERE id = '".$id."'");   
  }
    header("Location: ../views/pengumuman.php?success=Sukses");
    exit();
}else{
	header("Location: ../views/pengumuman.php?error=Error");
	exit();
}
?>