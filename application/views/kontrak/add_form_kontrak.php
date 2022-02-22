<section class="content-header">
    <h1>
        <?= $page ?> data kontrak
        <small>karyawan </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"> <i class=" fa fa-dashboard text-success"></i> </a> Home </li>
        <li> <a href="<?= site_url('kontrak') ?>"> <i class=" fa fa-database  text-aqua"></i> Data kontrak jabatan </a></li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Halaman <?= $page ?> data kontrak </h3>
            <div class="pull-right">
                <a href="<?= site_url('kontrak') ?>" class="btn btn-warning btn-flat btn-xs "><i class="fa fa-undo "></i></a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('kontrak/process') ?>" method="POST">

                        <div class="form-group">
                            <label></label>Karyawan
                            <input type="hidden" name="id" class="from-control" required value="<?= $kontrak->id_kontrak ?>">
                            <?php echo form_dropdown('pegawai', $pegawai, $selectedpegawai, ['class' => 'form-control', 'required' => 'required']) ?>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input type="text" name="tgl_mulai" value="<?= $kontrak->tgl_mulai ?>" required class="form-control date" placeholder="Tanggal mulai ">
                        </div>
                        <div class="form-group">
                            <label></label>Status
                            <select name="status" id="status" class="form-control" value="<?= $kontrak->status ?>">
                                <option value="">- pilih data -</option>
                                <option value="1" <?= $kontrak->status == 1 ? 'selected' : null ?>> Tetap </option>
                                <option value="2" <?= $kontrak->status == 2 ? 'selected' : null ?>> Kontrak </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label></label>Lama kontrak
                            <input type="text" class="form-control" value="<?= $kontrak->lama_kontrak ?>" name="lama_kontrak" required placeholder="lama_kontrak">
                        </div>
                        <div class="form-group">
                            <label></label>Tanggal selesai
                            <input type="text" name="tgl_selesai" value="<?= $kontrak->tgl_selesai ?>" required class="form-control date" placeholder="tanggal selesai">
                        </div>


                        <div class="form_group">
                            <button name="<?= $page ?>" class="btn btn-success btn-sm "><i class="fa fa-save "></i></button>
                            <button name="reset" class="btn btn-primary btn-sm"><i class=" fa fa-undo"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>