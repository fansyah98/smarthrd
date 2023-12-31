<!DOCTYPE html>
<html>

<script src="<?= base_url() ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?= base_url() ?>assets/jquery/dist/jquery.min.js"></script>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Sistem Informasi - HR </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- <link rel="shortcut icon" href="<?=base_url()?>assets/dist/logo/logo.jpg" type="image/x-icon"> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/sweetalert2/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">

    <style>
        .swal2-popup {
            font-size: 1.6rem !important;
        }
    </style>
</head>
<body class="hold-transition skin-aqua sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url() ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">E-HRD</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">                        
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url() ?>assets/dist/img/avatar.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $this->fungsi->user_login()->name ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url() ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= $this->fungsi->user_login()->name ?></p>
                        <a href="<?= site_url() ?>"><i class="fa fa-circle text-success"></i> <?= $this->fungsi->user_login()->level  == 1 ? 'Administrator' : 'Admin gudang' ?></a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">HALAMAN UTAMA</li>
                    <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                        <a href="<?= site_url('dashboard') ?>">
                            <i class="fa fa-dashboard "></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li <?= $this->uri->segment(1) == 'pegawai' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                        <a href="<?= site_url('pegawai') ?>">
                            <i class="fa fa-users "></i> <span>Pegawai</span>
                        </a>
                    </li>
                    <li class="treeview <?= $this->uri->segment(1) == 'cabang' || $this->uri->segment(1) == 'departemen' || $this->uri->segment(1) == 'satuan' || $this->uri->segment(1) == 'barang' || $this->uri->segment(1) == 'gudang' ? 'active' : '' ?>">
                        <a href="#">
                            <i class="fa fa-clone"></i>
                            <span> Master Data</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(1) == 'cabang'  ? 'class="active"' : '' ?>><a href="<?= site_url('cabang') ?>"><i class="fa fa-circle-o"></i><span>Data Cabang </a></li>
                            <li <?= $this->uri->segment(1) == 'departemen'  ? 'class="active"' : '' ?>><a href="<?= site_url('departemen') ?>"><i class="fa fa-circle-o"></i><span>Data Jabatan </a></li>
                            <li <?= $this->uri->segment(1) == 'informasi'  ? 'class="active"' : '' ?>><a href="<?= site_url('informasi') ?>"><i class="fa fa-circle-o"></i><span>Data Pengumuman </a></li>
                            <li <?= $this->uri->segment(1) == 'kebijakan'  ? 'class="active"' : '' ?>><a href="<?= site_url('kebijakan') ?>"><i class="fa fa-circle-o"></i><span>Data Kebijakan </a></li>
                            
                        </ul>
                    </li>
                    <li class="treeview <?= $this->uri->segment(1) == 'masuk/in'  ? 'active' : '' ?>">
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span> Data     </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(1) == 'jenis'  ? 'class="active"' : '' ?>><a href="<?= site_url('jenis') ?>"><i class="fa fa-circle-o "></i> <span> Kategori </span> </a></li>
                            <li <?= $this->uri->segment(1) == 'brand'  ? 'class="active"' : '' ?>><a href="<?= site_url('brand') ?>"><i class="fa fa-circle-o "></i> <span> Merek </a></li>
                            <li <?= $this->uri->segment(1) == 'satuan'  ? 'class="active"' : '' ?>><a href="<?= site_url('satuan') ?>"><i class="fa fa-circle-o"></i><span> Satuan </a></li>
                        </ul>
                    </li>            
                    <li class="treeview <?= $this->uri->segment(1) == 'masuk/in'  ? 'active' : '' ?>">
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span> Master </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(1) == 'masuk'  ? 'class="active"' : '' ?>><a href="<?= site_url('masuk/in') ?>"><i class="fa fa-folder   "></i> <span> Histori gudang </span> </a></li>
                            <li <?= $this->uri->segment(1) == 'masuk/in/add'  ? 'class="active"' : '' ?>><a href="<?= site_url('masuk/in/add') ?>"><i class="fa fa-arrow-right "></i> <span> Masuk </span> </a></li>
                            
                        </ul>
                    </li>            
                
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Laporan</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?=site_url('grafik')?>"><i class="fa fa-circle-o"></i> Grafik Barang </a></li>
                            <li><a href="<?=site_url('laporan_barang')?>"><i class="fa fa-circle-o"></i> Laporan Barang</a></li>
                            <li><a href="<?=site_url('laporan_barang_masuk')?>"><i class="fa fa-circle-o"></i> Laporan Barang Masuk </a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> Laporan Barang Keluar</a></li>
                        </ul>
                    </li>
                    <li class="header">PENGATURAN</li>
                    <?php
                    if ($this->session->userdata('level') == 1) { ?>
                        <li <?= $this->uri->segment(1) == 'user' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                            <a href="<?= site_url('user') ?>">
                                <i class="fa fa-user text-aqua"></i> <span style="color :aqua">Management User</span>
                            </a>
                        </li>
                    <?php } ?>
                    <li <?= $this->uri->segment(1) == 'informasi_aplikasi' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>><a href="<?= site_url('informasi_aplikasi') ?>"><i class="fa fa-gears "></i> <span> Info Aplikasi </span></a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-sign-out "></i> <span> Keluar</span></a></li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <?= $contents ?>
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <span>Copyright &copy; 2022 <a href="<?= site_url('dashboard') ?>">Fansyah Dwi Krisnady </a></span> 
        </footer>
    </div>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?= base_url() ?>assets/js/sf.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?= base_url() ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?= base_url() ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="<?= base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?= base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>assets/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/app.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/chartjs/chart.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?= base_url() ?>assets/sweetalert2/sweetalert2.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<script type="text/javascript" src="<?= base_url() ?>chart/dist/Chart.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script> -->

    <script>
        $(document).ready(function() {
            $('#table2').DataTable()
        })
    </script>

    <script>
        var flash = $('#flash').data('flash');
        if (flash) {
            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('selamat berhasil diupdate', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
                })

        }
    </script>
</body>

</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-sign-out"></i>Apakah ingin keluar ?</h5>
     
      </div>
   
      <div class="modal-footer">
        <a type="button" class="btn btn-info btn-sm" data-dismiss="modal"> <i class="fa fa-close"></i> Close</a>
        <a  type="button" class="btn btn-success btn-sm" href="<?=site_url('auth/keluar')?>"><i class="fa fa-sign-out"></i>Sign out</a>
      </div>
    </div>
  </div>
</div>