<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     <img src="img/logo.jpeg" alt="" width="200px">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>

          <label>Jabatan</label>
          <?php if (isset($_GET['jabatan'])) { ?>
               <input type="text" 
                      name="jabatan" 
                      placeholder="Jabatan"
                      value="<?php echo $_GET['jabatan']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="jabatan" 
                      placeholder="Jabatan">
          <?php }?>

          <label>Alamat</label>
          <?php if (isset($_GET['alamat'])) { ?>
               <input type="text" 
                      name="alamat" 
                      placeholder="Alamat"
                      value="<?php echo $_GET['alamat']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="alamat" 
                      placeholder="Alamat">
          <?php }?>

          <label >No Handphone</label>
          <?php if (isset($_GET['no_hp'])) { ?>
               <input type="text" 
                      name="no_hp" 
                      placeholder="Nomor Handphone"
                      value="<?php echo $_GET['no_hp']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="no_hp" 
                      placeholder="Nomor Handphone">
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email">
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>