<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Sistem Informasi Magang</h2>
     <form action="process/login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="email" name="email" placeholder="Email" required><br>
     	<input type="password" name="password" placeholder="Password" required><br>

     	<button type="submit"class="btn btn-primary">Login</button>
          <!-- <a href="views/signup.php" class="ca">Create an account</a> -->
     </form>
</body>
</html>