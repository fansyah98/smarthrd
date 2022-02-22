<section class="content-header">
  <h1>
    Halaman Home
    <small>Selamat Datang</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>

  </ol>
  <br>
  <div class="callout callout-info">
    <h4>Selamat Datang </h4>

    <p><?= $this->fungsi->user_login()->name ?> Selamat datang di SISTEM E-HRD WEBCODINGMEDIA <br>
      Silakan klik menu pilihan untuk mengolah data karyawan</p>
  </div>
</section>

<section class="content">

  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $this->fungsi->count_pegawai() ?></h3>

          <p>Data Pegawai</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>
        <a href="<?= site_url('pegawai') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?= $this->fungsi->count_magang() ?><sup style="font-size: 20px"></sup></h3>

          <p>Data Magang / PKL</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="<?= site_url('magang') ?> " class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?= $this->fungsi->count_unit() ?></h3>

          <p>Data Unit / Departemen </p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="<?= site_url('departemen') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?= $this->fungsi->count_cabang() ?></h3>

          <p>Data Cabang Perusahaan </p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="<?= site_url('cabang ') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>


  </div>

</section>