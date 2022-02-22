<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
<!-- load pilih tampilan warna  -->
<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
<!--folder skin css. -->
<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <h4>PT PUTRA DAMAI SENTOSA</h4>

  <table class="table table-bordered table-striped table-responsive">
        <thead> 
            <tr>
                <td>no</td>
                <td>nik</td>
                <td>karyawan</td>
                <td>jabatan</td>
                <td>cabang</td>
                <td>departemen</td>
                <td>ttl</td>
            </tr>
        </thead>
        <?php 
        $no = 1 ;
        foreach($pegawai->result() as $sayang => $data )  {  ?> 
        
        <tr>
            <td><?php echo $no++ ?> </td>
            <td><?php echo $data->nik?></td>
            <td><?php echo $data->name?></td>
            <td><?php echo $data->jabatan?></td>
            <td><?php echo $data->cabang_perusahaan?></td>
            <td><?php echo $data->level_jabatan?></td>
            <td><?php echo $data->Kota_asal ?> , <?php echo $data->ttl ?></td>
        </tr>
        <?php } ?> 
    </table>
    <a href="<?=site_url('pegawai')?>" class="btn btn-success btn-xs"><i class="fa fa-undo"></i></a>
    <script type="text/javascript">
        window.print();
    </script>
</body>

<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.js"></script>
<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/js/sweetalert2.all.min.js"></script>
</html>