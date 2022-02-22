<section class="content-header">
    <h1> Tambah data    
        <small>penggalaman kerja</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"> <i class=" fa fa-dashboard text-success"></i> </a> Home </li>
        <li> <a href="<?= site_url('karir') ?>"> <i class=" fa fa-database  text-aqua"></i>  Data karir </a></li>
    </ol>
</section>

<section class="content">
      <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Halaman <?= $page ?> data karir </h3>
            <div class="pull-right">
                  <a href="<?= site_url('karir') ?>" class="btn btn-success btn-flat btn-xs "><i class="fa fa-undo "></i></a>
        </div>
      </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('karir/prosess')?>" method="POST">
                 
                        <div class="form-group">
                            <label></label>Karyawan
                                <input type="hidden" name="id" class="form-control" required vaelue="<?= $karir->id_karir?>">
                                <?php echo form_dropdown('pegawai' , $pegawai , $selectedpegawai , [ 'class' => 'form-control' , 'required' => 'required']) ?>
                        </div>

                        <div class="form-group">
                            <label></label>Perusahaan
                                <input type="text" name="perusahaan" value="<?=$karir->perusahaan?> " class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label></label>Jenis Perusahaan
                                <input type="text" name="jenis" value="<?=$karir->jenis?> " class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label></label>Lokasi Perusahaan
                                <input type="text" name="lokasi" value="<?=$karir->lokasi?> " class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label></label>Departemen
                                <input type="text" name="departemen" value="<?=$karir->departemen?> " class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label></label>Jabatan 
                                <input type="text" name="jabatan" value="<?=$karir->jabatan?> " class="form-control" required>
                        </div>
   
                        <div class="form_group">          
                            <button name= "<?=$page?>"class="btn btn-success btn-sm " ><i class="fa fa-save "></i></button>
                            <button name="reset" class="btn btn-primary btn-sm"><i class=" fa fa-undo"></i></button>          
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>