<section class="content-header">
      <h1>
        Data    
        <small> Kantor Cabang </small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard "></i> Dashboard </a></li>
      <li><a href="<?=site_url('cabang_perusahaan')?>"> Data Kantor </a></li>
        
      </ol>
</section>

<section class="content">
 <?php $this->load->view('message'); ?>
  <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Kantor Cabang </h3>
        <div class="pull-right">
          <a href="<?=site_url('cabang/add')?>" class="btn btn-success btn-lg-5 "><i class="fa fa-building "></i> Tambah Kantor Cabang</a>
       </div>
      </div>
            <div class="box-body">
              <table id="table2" class="table table-bordered table-responsive">
                  <thead>
                    <tr>
                        <th width="5%" >No</th>
                        <th >Nama Cabang   </th>
                        <th  width="10%">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                   $no = 1 ;
                  foreach($cabang->result() as $sayang => $data ) { ?> 
                    <tr>
                      <td><?= $no ++ ?></td>
                      <td><?= $data -> name ?></td>
                      <td >
                        <a href="<?= site_url('cabang/edit/'. $data->id_cabang ) ?>" class=" btn btn-primary btn-lg-5"><i class="fa fa-pencil"></i></a>
                        <a href="<?=site_url('cabang/del/'. $data->id_cabang )?>" onclick="return confirm('Yakin Hapus data !!!')" class="btn btn-danger btn-lg-5"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                 <?php } ?>
              </table>
            </div>
          </div>
</section>

