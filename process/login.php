<?php 
session_start(); 
include "../connect/db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);
	$passs = md5($pass);

	if (empty($email)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $md5 = md5($pass);
		

        
		$sql = "SELECT admin.* FROM admin WHERE email='".$email."' AND password='".$md5."'";

		$result = mysqli_query($conn, $sql);

		

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] == $email && $row['password'] == $md5) {
            	$_SESSION['user_login'] = $row;
				$_SESSION['role']	= "Administrator";
            	header("Location: ../index.php");
            }else{
				header("Location: logout_process.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: logout_process.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../index.php");
	exit();
}