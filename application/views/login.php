<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="icon" href="<?= site_url() ?>assets/dist/img/logo/logo3.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman - Masuk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="background-image: url(<?= base_url() ?>assets/dist/img/bg/bg1.png ) ;" style="height: max-content;">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?= site_url('auth/login') ?>" style="color: darkblue; font-style :italic;"><b style="color: chartreuse; font-style :italic;">SMART</b> E - HRD <br>
        <small style="color :aqua ; font-style : blod ;"> Human Resource Department </a></small>
      </a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <!-- <?php $this->load->view('message') ?> -->
      <form action="<?= site_url('auth/process') ?>" method="post" id="form">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Email / Username" name="username">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password" id="show-hide">
          <i class="glyphicon glyphicon-eye-open form-control-feedback" id="passwordfield"></i>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-lg-12">
            <button type="submit" name="login" class="btn btn-primary btn-block btn-flat"> MASUK <i class="fa fa-sign-out text-green"> </i> </button>


            <!-- /.col -->
          </div>

        </div>
      </form>

      <a href="<?= site_url('auth/lupa_password') ?>">I forgot my password <i class="fa fa-key"></i></a><br>
    </div>
  </div>
  <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <script>

  </script>

  <!-- jQuery 3 -->
  <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?= base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
</body>

</html>