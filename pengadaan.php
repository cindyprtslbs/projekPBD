<?php
session_start();
if (!isset($_SESSION['iduser'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Penjualan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/cindy.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Cindy Permatasari Lubis</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">MASTER DATA</li>
          <li class="nav-item">
            <a href="Barang.php" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="vendor.php" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Vendor
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="satuan.php" class="nav-link">
              <i class="nav-icon fas fa-balance-scale"></i>
              <p>Satuan</p>
            </a>
          </li>
          <li class="nav-header">TRANSAKSI</li>
          <li class="nav-item">
            <a href="pengadaan.php" class="nav-link active">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Pengadaan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="penjualan.php" class="nav-link">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>
                Penjualan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="retur.php" class="nav-link">
              <i class="nav-icon fas fa-undo-alt"></i>
              <p>
                Retur Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="penerimaan.php" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Penerimaan
              </p>
            </a>
          </li>
          <li class="nav-header">LAPORAN</li>
          <li class="nav-item">
            <a href="stok.php" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Stok Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="margin_penjualan.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Laporan Penjualan
              </p>
            </a>
          </li>
          <li class="nav-header">PENGATURAN</li>
          <li class="nav-item">
            <a href="user.php" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p >Pengaturan User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p >Logout</p>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengadaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengadaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Pengadaan</h3>
              </div>
              <div class="card-body">
              <?php include 'konek.php'; ?>
                <form method="post" action="pengadaan.php">
                    <div class="row">
                      <div class="col-md-6">
                        <!-- <div class="form-group">
                          <label for="iduser">User</label>
                          <select name="iduser" class="form-control" id="iduser" required>
                            <?php
                            // $result = $db->query("SELECT * FROM user");
                            // while ($row = $result->fetch_assoc()) {
                            //     echo "<option value='" . $row['iduser'] . "'>" . $row['username'] . "</option>";
                            // }
                            ?>
                          </select>
                        </div> -->
                        <div class="form-group">
                          <label for="idvendor">Vendor</label>
                          <select name="idvendor" class="form-control" id="idvendor" required>
                            <?php
                            $result = $db->query("SELECT * FROM vendor");
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['idvendor'] . "'>" . $row['nama_vendor'] . "</option>";
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-info">Tambah Pengadaan</button>
                </form>

                <?php
                if (isset($_POST['tambah'])) {
                    // $iduser = $_POST['iduser'];
                    $iduser = $_SESSION['iduser'];
                    $idvendor = $_POST['idvendor'];

                    $q = $db->query("INSERT INTO pengadaan (timestamp, iduser, idvendor)
                    VALUES ( NOW(),'$iduser', '$idvendor')");

                    if ($q) {

                      $idpengadaan = $db->insert_id;

                      echo "<script>window.location = 'add_pengadaan.php?idpengadaan=$idpengadaan';</script>";
                    } else {
                      echo "<script>alert('Gagal menambahkan data penjualan!');</script>";
                    }
                }
                ?>

              </div>
            </div>



            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pembelian Barang dari Vendor</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID Pengadaan</th>
                      <th>Waktu Pengadaan</th>
                      <th>ID User</th>
                      <th>Status</th>
                      <th>ID Vendor</th>
                      <th>Subtotal Nilai</th>
                      <th>PPN </th>
                      <th>Total Nilai</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'konek.php';
                    $query = $db->query("SELECT * FROM
                      pengadaan");
                    foreach ($query as $tampil) {
                    ?>
                  <tr>
                    <td><?php echo $tampil["idpengadaan"];?></td>
                    <td><?php echo $tampil["timestamp"];?></td>
                    <td><?php echo $tampil["iduser"];?></td>
                    <td><?php echo $tampil["status"];?></td>
                    <td><?php echo $tampil["idvendor"];?></td>
                    <td><?php echo number_format($tampil['subtotal_nilai'], 0, ',', '.'); ?></td>
                    <td><?php echo $tampil["ppn"];?></td>
                    <td><?php echo number_format($tampil['total_nilai'], 0, ',', '.'); ?></td>
                    <td>
                        <a href="penerimaan.php?idpengadaan=<?php echo $tampil['idpengadaan']; ?>" class="btn btn-info btn-xs">Terima Pengadaan</a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Pengadaan</h3>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID Detail Pengadaan</th>
                      <th>Harga Satuan</th>
                      <th>Jumlah</th>
                      <th>Subtotal</th>
                      <th>ID Barang</th>
                      <th>ID Pengadaan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'konek.php';
                    $query = $db->query("SELECT * FROM detail_pengadaan");
                    foreach ($query as $tampil) {
                    ?>
                  <tr>
                    <td><?php echo $tampil["iddetail_pengadaan"];?></td>
                    <td><?php echo $tampil["harga_satuan"];?></td>
                    <td><?php echo $tampil["jumlah"];?></td>
                    <td><?php echo $tampil["sub_total"];?></td>
                    <td><?php echo $tampil["idbarang"];?></td>
                    <td><?php echo $tampil["idpengadaan"];?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
</body>
</html>
