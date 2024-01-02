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
      Data 
      <small>kontrak pegwai</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard text-aqua"></i></a>Dashboard</li>
      <li><a href="<?= site_url('kontrak') ?>">  Data Semua kontrak  Pegawai</a></li>
    </ol>
  </section>



  <section class="content">
    <?php $this->load->view('message'); ?>
    
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"> Data Semua kontrak  Pegawai</h3>
        <div class="pull-right">
          <a href="<?= base_url('pegawai') ?>" class="btn btn-primary"><i class="fa fa-undo"></i>   pegawai </a>
          <a href="<?= base_url('kontrak/add') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah kontrak pegawai </a>
        </div>
      </div>
      <div class="box-body">
        <table id="table2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Pegawai</th>
              <th>status</th>
              <th>tgl mulai </th>
              <th>Lama Kontrak</th>
              <th>tgl selesai</th>
              <th>aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              $no = 1;
              foreach ($row->result() as $sayang => $data) { ?>
                <td><?= $no++ ?> </td>
                <td><?= $data->name ?> </td>
                <td><?= $data->status ?> </td>
                <td><?= indo_date($data->tanggal_mulai) ?> </td>
                <td><?= $data->lama_kontrak ?> </td>
                <td><?= indo_date($data->tgl_selesai) ?> </td>
                <td> <a href="<?=site_url('kontrak/del/'. $data->id_kontrak)?>" class="btn btn-danger btn-lg-6"><i class="fa fa-trash-o"></i></a> </td>
            </tr>
          </tbody>
        <?php } ?>
        </table>
      </div>
    </div>
  </section>