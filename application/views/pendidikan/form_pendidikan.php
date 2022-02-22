<section class="content-header">
    <h1>data pendidikan
        <small>Karyawan</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"> <i class=" fa fa-dashboard text-success"></i> </a> Home </li>
        <li> <a href="<?= site_url('pendidikan') ?>"> <i class=" fa fa-database  text-aqua"></i> Data pendidikan </a></li>
    </ol>
</section>


<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> tambah data pendidikan </h3>
            <div class="pull-right">
                <a href="<?= site_url('pendidikan') ?>" class="btn btn-success btn-flat btn-xs "><i class="fa fa-undo "></i></a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('pendidikan/process') ?>" method="POST">

                        <div class="form-group">
                            <label></label>Karyawan
                             <input type="hidden" name="id" value="<?= $pendidikan->id_pendidikan ?>">
                            <?php echo form_dropdown('pegawai', $pegawai, $selectedpegawai, ['class' => 'form-control', 'required' => 'required']) ?>
                        </div>

                        <div class="form-group">
                            <label></label>Tingkat
                            <input type="text" name="tingkat" class="form-control" value="<?= $pendidikan->tingkat ?>">
                        </div>

                        <div class="form-group">
                            <label></label>Jurusan
                            <input type="text" name="jurusan" class="form-control" value="<?= $pendidikan->jurusan ?>">
                        </div>

                        <div class="form-group">
                            <label></label>Sekolah
                            <input type="text" name="sekolah" class="form-control" value="<?= $pendidikan->sekolah ?>">
                        </div>

                        <div class="form-group">
                            <label></label>lokasi
                            <input type="text" name="lokasi" class="form-control" value="<?= $pendidikan->lokasi ?>">
                        </div>

                        
                        <div class="form-group">
                            <label></label>tahun_lulus
                            <input type="date" name="date" class="form-control" value="<?= $pendidikan->tahun_lulus ?>">
                        </div>
                        <div class="form-group">
                        <button name= "<?=$page?>"class="btn btn-success btn-sm " ><i class="fa fa-save "></i></button>
                      <button name="reset" class="btn btn-primary btn-sm"><i class=" fa fa-undo"></i></button>          
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>