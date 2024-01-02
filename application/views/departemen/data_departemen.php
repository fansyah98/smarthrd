<section class="content-header">
  <h1>
    Data 
    <small> Divisi</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard "></i> Dashboard</a></li>
  <li><a href="<?=site_url('user')?>"> Data unit / Divisi </a></li>   
  </ol>
</section>

<section class="content">
<?php $this->load->view('message') ?> 
  <div class="box">
      <div class="box-header">
        <h3 class="box-title">  Data Divisi</h3>
        <div class="pull-right">
          <a href="<?= site_url('departemen/add') ?>" class="btn btn-warning  btn-lg-6 "><i class="fa fa-user-plus "></i>Tambah Divisi</a>
        </div>
      </div>
      <div class="box-body">
      <table class="table table-bordered table-hover table-responsive" id="table2">
                <thead>
                    <tr>
                        <th style="width: 3%;">ID</th>
                        <th>Kode</th>
                        <th>Nama Divisi</th>
                        <th style="width: 9%;">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($departemen->result() as $kamu => $data) { ?>
                            <td><?= $data->id_jabatan ?></td>
                            <td><?= $data->kode ?></td>
                            <td><?= $data->name ?></td>
                            <td  width="10%">
                                <a href="<?= site_url('brand/del/' . $data->id_jabatan) ?>" class="btn btn-success btn-lg-2"><i class="fa fa-trash"></i> </a>
                                <a href="<?= site_url('brand/edit/' . $data->id_jabatan) ?> " class="btn btn-warning  btn-lg-2"><i class="fa fa-eye"></i> </a>
                            </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
      </div>
    </div>
</section>

