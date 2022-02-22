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
        Data Riwayat
        <small>Pengalaman Pekerjaan</small> 
    </h1>

    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard text-aqua"></i></a>Dashboard</li>
        <li><a href="<?= site_url('karir')?>"> <i class="fa fa-file-o text-blue"></i>  Riwayat karir </a></li>
    </ol>
</section>

<section class="content">
<?php  $this->load->view('message'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Riwayat Karir Pekerjaan </h3>
            <div class="pull-right">
                <a href="<?=site_url('karir/add')?>"  class="btn btn-primary btn-xs "><i class="fa fa-plus"></i>Tambah data </a>
                <a href="<?=site_url('karir/print') ?>" class="btn btn-success btn-xs"><i class="fa fa-print"></i></a>
            </div>
        </div>
        <div class="box-body">
        <table id="table2" class="table table-bordered table-striped table-responsive " >
           <thead>
                <tr>
                    <th style="font-style: italic;">No</th>
                    <th style="font-style: italic;">Karyawan</th>
                    <th style="font-style: italic;">Perusahaan</th>
                    <th style="font-style: italic;">Jenis</th>
                    <th style="font-style: italic;">Lokasi</th>
                    <th style="font-style: italic;">Departemen</th>
                    <th style="font-style: italic;">Jabatan</th>
                    <th style="font-style: italic;" class="text-center">aksi</th>
                </tr>
           </thead>
           <tbody>
           <?php 
              $no = 1 ;
              foreach($row->result() as $sayang => $data ) { ?> 
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->name ?></td>
                <td><?= $data->perusahaan ?></td>
                <td><?= $data->jenis ?></td>
                <td><?= $data->lokasi ?></td>
                <td><?= $data->departemen?></td>
                <td><?= $data->jabatan ?></td>
                <td class="text-center">
                  <a href="<?=site_url('karir/del/' . $data->id_karir ) ?>" class="btn btn-primary btn-xs " ><i class=" fa fa-trash"></i></a>
                  <a href="<?=site_url('karir/edit/'. $data->id_karir )?> " class="btn btn-warning btn-xs "><i class="fa fa-pencil"></i></a>
                </td>
              </tr>
           </tbody>
           <?php } ?>
        </table>
        </div>
    </div>
</section>







