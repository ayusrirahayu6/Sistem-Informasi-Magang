<?php 
    if (isset($_GET['file'])) {
    $filename    = $_GET['file'];

    $back_dir    ="../../admin/document/";
    $file = $back_dir.$_GET['file'];
     
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: private');
            header('Pragma: private');
            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            
            exit;
        } 
        else {
            echo "<script> alert('File Tidak Ditemukan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=../views/pengumuman.php'>";
        }
    }
?>