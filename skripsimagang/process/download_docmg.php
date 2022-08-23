<?php
    $filename    = "doc_magang.pdf";

    $back_dir    ="../../admin/document/magang/";
    $file = $back_dir.$filename;
     
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
        $_SESSION['pesan'] = "Oops! File - $filename - not found ...";
        header("location:../home.php");
    }
?>