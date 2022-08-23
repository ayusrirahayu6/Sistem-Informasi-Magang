<?php 

$msg=$_GET['msg'];
if($msg=="berhasilsimpan"){ ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>SUKSES!</strong> <br>Data berhasil ditambahkan.
</div>
<?php }else if($msg=="berhasilupdate"){ ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>SUKSES!</strong> <br>Data berhasil diperbaharui.
</div>
<?php }else if($msg=="berhasilhapus"){ ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>SUKSES!</strong> <br>Data berhasil dihapus.
</div>
<?php }else{ echo ""; } ?>