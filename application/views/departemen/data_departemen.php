<section class="content-header">
  <h1>
    Data 
    <small>Departemen</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard text-success"></i> Home</a></li>
  <li><a href="<?=site_url('user')?>"><i class="fa fa-database text-warning"></i> Data departemen jabatan </a></li>   
  </ol>
</section>

<section class="content">
<?php $this->load->view('message') ?> 
  <div class="box">
      <div class="box-header">
        <h3 class="box-title"> Halaman Data departemen</h3>
        <div class="pull-right">
          <a href="<?= site_url('departemen/add') ?>" class="btn btn-warning  btn-xs "><i class="fa fa-user-plus "></i></a>
          <a href="" class="btn btn-danger btn-xs "><i class="fa fa-print "></i></a>
        </div>
      </div>
      <div class="box-body">
        <table id="table2"  class="table table-bordered table-striped table-responsive">
          <thead>
          <tr>
            <th style="font-style: italic;">No</th>
            <th style="font-style: italic;">Nama unit / Departemen </th>
            <th class="text-center" style="font-style: italic;">Kode  </th>
            <th class="text-center" style="font-style: italic;">Action </th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <?php 
              $no = 1 ;
              foreach ($departemen->result() as $kamu => $data ){ ?>
              <tr>
                <td ><?= $no++; ?></td>
                <td><?= $data->name?></td>
                <td class="text-center"><?= $data->kode?></td>
                <td class="text-center">
                  <form action="<?=site_url('departemen/del/' . $data->id_jabatan)?>" method="POST">
                    <input type="hidden" name="id_departemen" value="<?= $data->id_jabatan?>">
                    <button class="btn btn-primary btn-xs" onclick=" return confirm('Yakin hapus data ???')" ><i class="fa fa-trash"> </i></button>
                    <a href="<?=site_url('departemen/edit/' . $data->id_jabatan) ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil "></i></a>
                  </form>
                </td>   
            </tbody>
          <?php } ?>
        </table>
      </div>
    </div>
</section>

