<section class="content-header">
    <h1>
         Tambah  
        <small>Data Kontrak </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"> <i class=" fa fa-dashboard"></i> </a> Dashboard </li>
        <li> <a href="<?= site_url('kontrak') ?>">  Data kontrak  </a></li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Halaman Tambah Data kontrak </h3>
            <div class="pull-right">
                <a href="<?= site_url('kontrak') ?>" class="btn btn-warning  btn-lg-6 "><i class="fa fa-undo "></i> Close</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('kontrak/process') ?>" method="POST">

                        <div class="form-group">
                            <label>Karyawan</label>
                            <input type="hidden" name="id" class="from-control" required value="<?= $kontrak->id_kontrak ?>">
                            <?php echo form_dropdown('pegawai', $pegawai, $selectedpegawai, ['class' => 'form-control', 'required' => 'required']) ?>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input type="text" name="tgl_mulai" value="<?= $kontrak->tgl_mulai ?>" required class="form-control date" placeholder="Tanggal mulai ">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control" value="<?= $kontrak->status ?>">
                                <option value="">- pilih data -</option>
                                <option value="Tetap" <?= $kontrak->status == 'Tetap' ? 'selected' : null ?>> Tetap </option>
                                <option value="kontrak" <?= $kontrak->status == 'kontrak' ? 'selected' : null ?>> Kontrak </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lama kontrak</label> 
                            <input type="text" class="form-control" value="<?= $kontrak->lama_kontrak ?>" name="lama_kontrak" required placeholder="lama_kontrak">
                        </div>
                        <div class="form-group">
                            <label>Tanggal selesai</label>
                            <input type="text" name="tgl_selesai" value="<?= $kontrak->tgl_selesai ?>" required class="form-control date" placeholder="tanggal selesai">
                        </div>


                        <div class="form_group">
                            <button name="<?= $page ?>" class="btn btn-success btn-lg-5 "><i class="fa fa-save "></i> Simpan Data</button>
                            <button name="reset" class="btn btn-primary btn-lg-5"><i class=" fa fa-undo"></i>Reset Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>