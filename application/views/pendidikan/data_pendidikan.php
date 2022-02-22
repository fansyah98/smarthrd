<section class="content-header">
    <h1>
        Data Riwayat
        <small>Pendidikan Akhir</small> 
    </h1>

    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard text-aqua"></i></a>Dashboard</li>
        <li><a href="<?= site_url('pendidikan')?>"> <i class="fa fa-user text-blue"></i>  Riwayat </a></li>
    </ol>
</section>

<section class="content">
<?php $this->load->view('message'); ?>
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Halaman Data Riwayat </h3>
      <div class="pull-right">
        <a href="<?=site_url('pendidikan/add')?>" class=" btn btn-success btn-xs" > <i class="fa fa-plus"> </i> Tambah Data </a>
      </div>
    </div>
    <div class="box-body">
    <table id="table2" class="table table-bordered table-striped table-responsive " >
      <thead>
        <tr>
          <td>No</td>
          <td>Karyawan</td>
          <td>Pendidikan</td>
          <td>Jurusan</td>
          <td>Asal Sekolah</td>
          <td>Lokasi</td>
          <td>Tahun lulus</td>
          <td>actions</td>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
        $no = 1 ;
        foreach($pendidikan->result() as $sayang => $data ) { ?> 
          <td><?= $no++ ?> </td>
          <td><?= $data->name ?> </td>
          <td><?= $data->tingkat?></td>
          <td><?= $data->jurusan ?></td>
          <td><?= $data->sekolah ?></td>
          <td><?= $data->lokasi ?></td>
          <td><?= $data->tahun_lulus ?></td>
          <td>
            <a href="<?=site_url('pendidikan/edit/'. $data->id_pendidikan)?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Update</a>
            <a href="<?=site_url('pendidikan/del/'. $data->id_pendidikan)?>" class="btn btn-primary btn-xs" onclick="return confirm('Yakin data pen di hapus !!')"><i class="fa fa-trash"></i> Delete</a>
          </td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    </div>
  </div>
</section>