<section class="content-header">
    <h1> Data Perserta PKL
        <small>Mahasiswa/i</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"> <i class=" fa fa-dashboard text-success"></i> </a> HOME </li>
        <li> <a href="<?= site_url('magang') ?>"> <i class=" fa fa-database  text-aqua"></i> DATA MAGANG </a></li>
    </ol>
</section>


<section class="content">
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"> Halaman Data Magang/PKL </h3>
                <div class="pull-right">
                    <a href="<?= site_url('magang') ?>" class="btn btn-success btn-flat btn-xs "><i class="fa fa-undo "></i></a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?= site_url('magang/prosess') ?>" method="POST">

                            <div class="form-group">
                                <label> Nama Mahasiswa</label>
                                <input type="hidden" name="id" value="<?= $magang->id_magang ?>">
                                <input type="text" name="nama" class="form-control" value="<?= $magang->nama ?>">
                            </div>

                            <div class="form-group ">
                              <label for="nim">NIM</label>
                                <input type="text" class="form-control" name="nim" value="<?= $magang->nim ?>">

                            </div>

                            <div class="form-group ">
                                <label>Semester</label>
                                <input type="text" class="form-control" name="semester" value="<?= $magang->semester ?> ">
                            </div>

                            <div class="form-group ">
                                <label>Jenis Kelamin </label>
                                <select name="gender" id="" class="form-control">
                                    <option value="">Pilih</option>
                                    <option value="1" <?= $magang->gender == 1 ? 'selected' : null ?>> Laki Laki</option>
                                    <option value="2" <?= $magang->gender == 2 ? 'selected'  : null  ?>>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group ">
                                <label for="">Universitas </label>
                                <input type="text" name="universitas" class="form-control" value="<?= $magang->universitas ?>">
                            </div>

                            <div class="form-group ">
                               <label for="">Jurusan / Prodi</label>
                                <input type="text" class="form-control" name="jurusan" value="<?= $magang->jurusan ?>" name="jurusan">
                            </div>

                            <div class="form-group">
                                <button type="submit" name="<?= $page ?>" class="btn btn-success"><i class="fa fa-save"></i></button>
                                <button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i></button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>


    </section>