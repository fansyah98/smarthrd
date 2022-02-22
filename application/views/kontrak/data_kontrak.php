<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <section class="content-header">
    <h1>
      Master Data
      <small>kontrak karyawan</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard text-aqua"></i></a>Dashboard</li>
      <li><a href="<?= site_url('kontrak') ?>"> <i class="fa fa-database text-blue"></i> Data kontrak </a></li>
    </ol>
  </section>



  <section class="content">
    <?php $this->load->view('message'); ?>
    <div class="box">

      <form action="<?= site_url('kontrak/index') ?>" method="GET">

        <div class="form-group">
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" name="stardate" class="form-control pull-right date" placeholder="stardate" required>
          </div>
        </div>

        <div class="form-group">
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" name="enddate" class="form-control pull-right date" id="datepicker" placeholder="enddate" required>
          </div>
          <button type="submit" class="btn btn-success btn-xs"> <i class="fa fa-search"></i>Cari data </button>

        </div>


      </form>
    </div>
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Halaman data kontrak </h3>
        <div class="pull-right">
          <a href="<?= base_url('kontrak/add') ?>" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah data </a>
        </div>
      </div>
      <div class="box-body">
        <table id="table2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Karyawan</th>
              <th>status</th>
              <th>tgl mulai </th>
              <th>Lama Kontrak</th>
              <th>tgl selesai</th>
              <th class="text-center">action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              $no = 1;
              foreach ($row->result() as $sayang => $data) { ?>
                <td><?= $no++ ?> </td>
                <td><?= $data->name ?> </td>
                <td><?= $data->status == 1 ? 'Tetap' : 'Kontrak' ?> </td>
                <td><?= indo_date($data->tgl_mulai) ?> </td>
                <td><?= $data->lama_kontrak ?> </td>
                <td><?= indo_date($data->tgl_selesai) ?> </td>
                <td class="text-center">
                  <a href="<?= site_url('kontrak/edit/' . $data->id_kontrak) ?>" class="btn btn-success btn-xs btn-shadow"><i class="fa fa-pencil"></i></a>
                  <a href="<?= site_url('kontrak/del/' . $data->id_kontrak) ?> " onclick="return confirm('Yakin data mau di hapus !! ')" class="btn btn-danger btn-xs btn-shadow"><i class="fa fa-trash"></i></a>
                </td>

            </tr>

          </tbody>
        <?php } ?>

        </table>
      </div>
    </div>

  </section>