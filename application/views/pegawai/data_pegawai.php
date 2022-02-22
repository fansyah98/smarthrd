<section class="content-header">
  <h1>
    Data Karyawan
    <small>Halaman Data karyawan </small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard text-success"></i> HOME</a></li>
    <li><a href="<?= site_url('pegawai') ?>"><i class="fa fa-database text-blue"></i> DATA PEGAWAI </a></li>
  </ol>
</section>

<section class="content">
  <?php $this->load->view('message') ?>
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"> Halaman Data Karyawan </h3>
      <div class="pull-right">
        <a href="<?= site_url('pegawai/add') ?>" class="btn btn-success  btn-xs "><i class="fa fa-user-plus "></i> Tambah data</a>
        <a href="<?= site_url('pegawai/export_excel') ?>" class="btn btn-warning  btn-xs "><i class="fa fa-download "></i> Export Excel</a>
        <a href="<?= site_url('pegawai/pdf') ?>" class="btn btn-danger  btn-xs "><i class="fa fa-download "></i> Export Pdf</a>
        <a href="<?php echo base_url('pegawai/print') ?>" class="btn btn-primary  btn-xs "><i class="fa fa-print "></i> Print Semua data</a>
      </div>
    </div>
    <div class="box-body">
      <table class="table table-bordered table-striped table-responsive " id="table2">
        <thead>
          <tr>
            <td>No</td>
            <td>Nik</td>
            <td>Karyawan</td>
            <td>TLL</td>
            <td>actions</td>
          </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($pegawai->result() as $sayang => $data) { ?>
          <td><?= $no++ ?></td>
          <td><a href="<?= site_url('pegawai/detail/' . $data->id_karyawan) ?>"><?= $data->nik ?></a></td>
          <td><?= $data->name ?></td>

          <td><?= indo_date($data->ttl)    ?></td>
          <td>
            <a href="<?= site_url('pegawai/del/' . $data->id_karyawan) ?>" class="btn btn-warning btn-xs" onclick="return confrim('Yakin di hapus !!!')"><i class="fa fa-trash"></i>hapus</a>
            <a href="<?= site_url('pegawai/edit/' . $data->id_karyawan) ?>" class="btn btn-danger btn-xs "><i class="fa fa-pencil "></i>ubah </a>
          </td>
          </tbody>
        <?php } ?>

      </table>

    </div>
  </div>
</section>