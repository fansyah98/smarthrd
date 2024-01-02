<section class="content-header">
  <h1>
    Data 
    <small> Pegawai</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard "></i> Home</a></li>
    <li><a href="<?= site_url('pegawai') ?>">Data Pegawai </a></li>
  </ol>
</section>

<section class="content">
  <?php $this->load->view('message') ?>
  
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $this->fungsi->count_pegawai() ?></h3>

          <p>Kontrak Pegawai</p>
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

          <p>Karyawan Risen</p>
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

          <p>Jadwal Shift Karyawan </p>
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
          <p>Kontrak Pegawai</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="<?= site_url('cabang ') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>


  </div>


  <div class="box">
    <div class="box-header">
      <h3 class="box-title">  Data Pegawai </h3>
      <div class="pull-right">
         <a href="<?= site_url('kontrak') ?>" class="btn btn-warning  btn-lg-5 "><i class="fa fa-file-pdf-o"></i> Kontrak Pegawai</a>
         <a href="<?= site_url() ?>" class="btn btn-info  btn-lg-5 "><i class="fa fa- fa-clock-o "></i> Jadwal Shif Karyawan</a>
         <a href="<?= site_url() ?>" class="btn btn-primary  btn-lg-5 "><i class="fa fa-sign-out "></i> Karyawan  Risegn </a>
         <a href="<?= site_url('pegawai/add') ?>" class="btn btn-success  btn-lg-5 "><i class="fa fa-user-plus "></i> Tambah Data Pegawai</a>
      </div>
    </div>
    <div class="box-body">
      <table class="table table-bordered table-responsive " id="table2">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP </th>
            <th>NO KTP</th>
            <th>Karyawan</th>
            <th>Jenis Kelamin</th>
            <th>TLL</th>
            <th>Unit </th>
            <th width="15% ">actions</th>
          </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($pegawai->result() as $sayang => $data) { ?>
          <td><?= $no++ ?></td>
          <td><a href="<?= site_url('pegawai/barcode_qrcode/' . $data->id_karyawan) ?>"><?= $data->nip ?></a></td>
          <td><?= $data->nik ?></a></td>
          <td><?= $data->name ?></td>     
          <td><?= $data->jenis_kelamin == 2 ? "Laki - laki " : " Perempuan " ?></td>     
          <td><?= indo_date($data->ttl)    ?></td>
          <td><?= $data->level_jabatan ?></td>
          <td>
            <a href="" class="btn btn-success btn-lg-5" ><i class="fa fa-eye"></i></a>
            <a href="<?= site_url('pegawai/del/' . $data->id_karyawan) ?>" class="btn btn-warning btn-lg-5" onclick="return confrim('Yakin di hapus !!!')"><i class="fa fa-trash"></i>  </a>
            <a href="" class="btn btn-danger btn-lg-5 "><i class="fa fa-pencil "></i> </a>
          </td>
          </tbody>
        <?php } ?>
      </table>

    </div>
  </div>
</section>