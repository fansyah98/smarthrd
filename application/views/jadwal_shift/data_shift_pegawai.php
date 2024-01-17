<section class="content-header">
      <h1>
        Data    
        <small>Shift  </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard "></i> Dashboard </a></li>
        <li><a href="<?=site_url('jadwal_shift')?>"> Data Shift </a></li>
            
      </ol>
</section>

<section class="content">
 <?php $this->load->view('message'); ?>
  <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Shif</h3>
        <div class="pull-right">
          <a href="" class="btn btn-success btn-lg-5 "><i class="fa fa-plus "></i> Tambah Shift </a>
       </div>
      </div>
            <div class="box-body">
            <table id="table2" class="table table-bordered table-responsive">
                  <thead>
                    <tr>
                        <th width="5%" >No</th>
                        <th >Nama Shift   </th>
                        <th >Jam Kerja   </th>
                        <th >Status   </th>
                        <th >Terdaftar   </th>
                        <th  width="10%">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                        <tr>
                            <?php 
                             $no = 1 ;
                             foreach ($jadwal->result() as $key => $value) { ?>
                             <td><?= $no++ ?></td>
                             <td><?= $value->nama_shift ?></td>
                             <td><?= $value->jam_mulai ?> s/d <?= $value->jam_selesai ?></td>
                             <td><span class="badge badge-info"><?= $value->status ?></span></td>
                             <td><?= $value->terdaftar ?></td>
                     
                             <td>
                                 <a href="" class="btn btn-success btn-lg-5 "><i class="fa fa-pencil"></i></a>
                                 <a href="" class="btn btn-danger btn-lg-5 "><i class="fa fa-trash"></i></a>
                             </td>
                            </tr>
                        </tbody>
                        <?php } ?>
              </table>
            </div>
          </div>
</section>

