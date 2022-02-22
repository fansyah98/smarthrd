<section class="content-header">
      <h1>
        Data cabang   
        <small>Tempat perusahaan </small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard text-success"></i> home </a></li>
      <li><a href="<?=site_url('cabang_perusahaan')?>"><i class="fa fa-database text-warning"></i> tempat perusahaan </a></li>
        
      </ol>
</section>

<section class="content">
 <?php $this->load->view('message'); ?>
  <div class="box">
      <div class="box-header">
        <h3 class="box-title"> Halaman Data Cabang Perusahaan </h3>
        <div class="pull-right">
          <a href="<?=site_url('cabang/add')?>" class="btn btn-success btn-flat btn-xs "><i class="fa fa-user-plus "></i></a>
       </div>
      </div>
            <div class="box-body">
              <table id="table2" class="table table-bordered table-responsive">
                  <thead>
                    <tr>
                        <th style="font-style: italic;">No</th>
                        <th style="font-style: italic;">Nama Cabang   </th>
                        <th class="text-center" style="font-style: italic;">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                   $no = 1 ;
                  foreach($cabang->result() as $sayang => $data ) { ?> 
                    <tr>
                      <td><?= $no ++ ?></td>
                      <td><?= $data -> name ?></td>
                      <td style="text-align: center;">
                        <a href="<?= site_url('cabang/edit/'. $data->id_cabang ) ?>" class=" btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <a href="<?=site_url('cabang/del/'. $data->id_cabang )?>" onclick="return confirm('Yakin Hapus data !!!')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                 <?php } ?>
              </table>
            </div>
          </div>
</section>

