<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> SMARTHRD - DASHBOARD</title>
  <!-- Tell the browser to be responsive to screen width -->

  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css  ">

  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- load pilih tampilan warna  -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!--folder skin css. -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?= site_url('dashboard') ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>H</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">E- HRD</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="<?= site_url('dashboard') ?>" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= $this->fungsi->user_login()->name ?></span>
              </a>

            </li>

          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?= $this->fungsi->user_login()->name ?></p>
            <a href="<?= site_url('dashboard') ?>"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less // tampilan menu  -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU UTAMA</li>
          <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard text-aqua"></i> <span>Dashboard</span></a></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-database text-green"></i>
              <span>Master data </span>
              <span class="pull-right-container">
                <i class=" fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= site_url('pegawai') ?>"><i class="fa fa-user text-green"></i> Data karyawa </a></li>
              <li><a href="<?= site_url('departemen') ?>"><i class="fa fa-cubes text-danger"></i> Data Unit / Departemen</a></li>
              <li><a href="<?= site_url('Cabang') ?> "><i class="fa fa-paper-plane text-aqua"></i> Data Cabang </a></li>
            </ul>
          </li>
          <li><a href="<?= site_url('magang') ?>"><i class="fa fa-database text-success"></i> <span>Mahasiswa KKN</span></a></li>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-graduation-cap text-danger"></i>
              <span>Data Riwayat</span>
              <span class="pull-right-container">
                <i class=" fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= site_url('pendidikan') ?>"><i class="fa fa-user text-green"></i> Pendidikan </a></li>
              <li><a href="<?= site_url('karir') ?>"><i class="fa fa-cubes text-warning"></i> Penggalaman Kerja </a></li>
            </ul>
          </li>

          <li><a href="<?= site_url('kontrak') ?>"><i class="fa fa-file text-red"></i> <span>Kontrak </span></a></li>
          <li class="header">HALAMAN LAPORAN</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-print text-green"></i>
              <span>Laporan </span>
              <span class="pull-right-container">
                <i class=" fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=""><i class="fa fa-user text-green"></i> Laporan harian </a></li>
              <li><a href=""><i class="fa fa-cubes text-danger"></i> Laporan bulanan</a></li>
              <li><a href=" "><i class="fa fa-paper-plane text-aqua"></i> Laporan tahuana</a></li>
            </ul>
          </li>

          <li class="header">HALAMAN SETTING</li>
          <li><a href="<?= site_url('user') ?>"><i class="fa fa-user text-red"></i> <span>User</span></a></li>
          <li><a href="<?= site_url('auth/keluar') ?>"><i class="fa fa-sign-out text-success"></i> <span>Log Out</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- tampilan untuk menampilkan isi atau content -->
    <div class="content-wrapper">
      <?= $contents ?>
    </div>

    <!-- /.content-wrapper -->
    <!--Bagian tampilan bahwa program atau footer--->
    <footer class="main-footer">
      <div class="pull-right">
        <small>Email : </small><a href="">Fansyahdwi204@gmail.com</a>
      </div>
      &copy; 2021 <a href="<?= site_url('dashboard') ?>">E- HRD ONLINE</a>. All rights
      reserved. Version 1.0
    </footer>
  </div>


  <!-- jQuery 3 -->
  <script src="<?= base_url() ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url() ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?= base_url() ?>/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url() ?>/assets/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>/assets/dist/js/demo.js"></script>
  <script src="<?= base_url() ?>/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

  <!-- bootstrap datepicker -->
  <script src="<?= base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- bootstrap color picker -->
  <script src="<?= base_url() ?>assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="<?= base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <script src="<?= base_url() ?>assets/js/sf.js"></script>

  <script>
    $(document).ready(function() {
      $('#table2').DataTable()
    })
  </script>

</body>

</html>