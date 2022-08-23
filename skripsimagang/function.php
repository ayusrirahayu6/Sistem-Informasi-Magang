    <?php
    require "koneksi.php";
    if(isset($_POST['loginbaru'])){
    $inputemail=$_POST['inputemail'];
    $inputkatasandi=md5($_POST['inputkatasandi']);

    $sql=mysql_query("SELECT inputemail FROM daftar WHERE inputemail= '$inputemail' AND inputkatasandi = '$inputkatasandi'");
    
    $cek=mysql_num_rows($sql);

    if($cek > 0){
      $_SESSION['inputemail']= $_POST['inputemail'];
      echo "<meta http-equiv='refresh' content='0; url=home1.html?'>";
    }else{
      echo "<script>
          alert('email atau kata sandi salah')</script>";
          echo "<meta http-equiv='refresh' content='0; url=login.html?'>";
      return false;
    }
  }
?>