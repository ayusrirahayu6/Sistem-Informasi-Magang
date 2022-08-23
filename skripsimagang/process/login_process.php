<?php 
session_start(); 
include "../connect/db_conn.php";

	$email = $_POST['inputemail'];
	$pass = $_POST['inputkatasandi'];
	$passs = md5($pass);

	$sql = "SELECT * FROM daftar WHERE inputemail='".$email."' AND inputkatasandi='".$passs."'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		// echo $email."=".$row['inputemail']."<br>";
		// echo $email."=".$row['inputemail']."<br>";
		if ($row['inputemail'] == $email && $row['inputkatasandi'] == $passs) {
			$_SESSION['userr'] = $row;
			$_SESSION['roles']	= "Pendaftar";
			header("Location: ../home.php");
		}else{
			echo "<script>
			alert('Login Gagal')</script>";
			echo "<meta http-equiv='refresh' content='0; url=../views/login.php'>";
		}
	}else{
		echo "<script> alert('Email atau Password Salah')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../views/login.php'>";
	}
?>