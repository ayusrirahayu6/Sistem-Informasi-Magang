<?php 

session_start();
include "../connect/db_conn.php";

if (isset($_SESSION['user_login'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIM | Lowongan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <b><?= $_SESSION['user_login']['nama'] ?></b>
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm">
          <a href="../process/logout_process.php" class="dropdown-item">
            Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Sistem Magang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="pendaftar.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pendaftar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="peserta.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Peserta
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="lamaran.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Lamaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="bagian.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Bagian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="lowongan.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Lowongan Magang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pengumuman.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Pengumuman
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <div class="row justify-content-between ml-1 mr-1">

            <h1 class="m-0 text-dark">Daftar Lowongan Magang</h1>
            <a href="lowongan_add.php" class="btn btn-primary btn-sm" type="button"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                  <th>Judul Magang</th>
                  <th>Bagian</th>
                  <th>Kuota</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $data = "SELECT a.id as id_low, a.*, b.nama_bagian FROM `info_magang` a JOIN bagian b ON a.id_bagian = b.id";
                $result = $conn->query($data);
                $no = 1;
                while($row = $result->fetch_array()){
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                  <td><?= $row['nama'] ?></td>
                  <td><?= $row['nama_bagian'] ?>
                  </td>
                  <td><?= $row['kuota'] ?></td>
                  <td><?= $row['status'] == 1 ? "Aktif" : "Tidak Aktif"; ?></td>
                  <td>
                    <a href="lowongan_edit.php?id=<?= $row['id_low']; ?>" type="button" title="Edit Bagian" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a>
                    <button type="button" title="Delete Bagian" class="btn btn-danger btn-xs" onclick="test(<?= $row['id']?>)"><i class="fas fa-trash"></i></button>
                </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Sistem Informasi Magang</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- Toastr -->
<script src="../../admin/plugins/toastr/toastr.min.js"></script>


<script src="../plugins/jquery/jquery.min.js"></script>

<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> 
<script type="text/javascript">
    function test(idbag){
        console.log(idbag);
        Swal.fire({
        title: 'Apakah anda ingin menghapus data ini?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        confirmButtonClass: 'btn btn-warning',
        cancelButtonClass: 'btn btn-danger ml-1',
        buttonsStyling: false,
      }).then(function (result) {
        if (result.value) {
          $.ajax({
            type  : "POST",
            url   : "../process/hapus_magang.php",
            data  : {
              idmagang : idbag,
            },
            success: function(response) {
                console.log(response);
              Swal.fire({
                type: "Sukses",
                text: 'Data berhasil dihapus.',
                confirmButtonClass: 'btn btn-success',
              }).then((w) =>{
                  location.reload(true);
              });
            },
            failure: function (response) {
                swal(
                "Internal Error",
                "Oops, your note was not saved.", // had a missing comma
                "error"
                )
            }
          });
        }
        else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: 'Dibatalkan',
            text: 'Hapus Data dibatalkan :)',
            type: 'error',
            confirmButtonClass: 'btn btn-success',
          })
        }
      });
    }
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- SweetAlert2 -->
<script src="../../admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: ../process/logout_process.php");
     exit();
}
 ?>