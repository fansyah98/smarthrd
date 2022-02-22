<section class="content-header">
    <h1>  Tambah Data
        <small> Pegawai Perusahaan</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>" ><i class="fa fa-dashboard text-aqua"></i></a>HOME</li>
        <li> <a href="<?= site_url( 'pegawai')?>" > <i class="fa fa-database text-danger"></i></a> PEGAWAI</li>
        <li> <a href="<?= site_url( 'pegawai/add')?>" > <i class="fa fa-user-plus text-warning"></i></a> TAMBAH PEGAWAI</li>
    </ol>

</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?= $page ?> Pegawai</h3>
                <div class="pull-right">
                    <a href="<?= site_url('pegawai') ?>"  class=" btn btn-success btn-sm btn-flat"> <i class="fa fa-undo"></i></a>
                </div>
        </div>
  

    <div class="box-body">
        <div class="row">
            <div class="col-md-6 col-md-offset-4">
                <form action="<?= site_url('pegawai/process') ?>" method="POST">
                <div class="row">
                    <div class="form-group col-xs-5">
                        <input type="hidden" name="id" class="form-control" value="<?= $pegawai->id_karyawan?>">
                        <label style="font-style: italic;">  Nomor Induk Keluarga </label>
                        <input type="text" name="nik" class="form-control" value="<?= $pegawai->nik?>" required>
                    </div>
                    <div class="form-group col-xs-7">
                        <i class="fa fa-user-plus text-aqua"></i> <label style="font-style: italic;">Nama Lengkap   </label>
                        <input type="text" name="name" class="form-control " value="<?= $pegawai->name ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-5"> Jabatan 
                            <input type="text" name="jabatan" class="form-control" value="<?= $pegawai->jabatan ?>" required>
                    </div>
                    <div class="form-gruop col-xs-7">Jenis Kelamin 
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="">- pilih data - </option>
                            <option value="1" <?= $pegawai->jenis_kelamin == 1 ? 'selected' : null ?>>Perempuan </option>
                            <option value="2" <?= $pegawai->jenis_kelamin == 2 ? 'selected' : null ?>>Laki Laki </option>
                        </select>
                    </div>  
                </div>

                <div class="form-group "></i> Alamat Rumah 
                        <input type="text" name="alamat" class="form-control" value="<?= $pegawai->alamat ?>" required>
                </div>

                <div class="row">
                    <div class="form-group col-xs-6"> Tanggal lahir
                            <input type="date" name="date" class="form-control" value="<?= $pegawai->ttl ?>" required>
                    </div>
                    <div class="form-group col-xs-6"> Tempat lahir
                            <input type="text" name="kota_asal" class="form-control" value="<?= $pegawai->Kota_asal ?>" required>
                    </div>
                </div>
            
                 <div class="row">      
                    <div class="form-group col-xs-6"> Warga Negara
                        <input type="text" name="wn" class="form-control" value="<?= $pegawai->wn ?>" required>
                    </div>
                    <div class="form-group col-xs-6">Golongan darah 
                        <input type="text" name="gologan_darah" class="form-control" value="<?= $pegawai->golongan_darah ?>" required>
                    </div>
                </div> 
                    <div class="form-group"> Nomo Hp 
                        <input type="number" name="no_hp" class="form-control" value="<?= $pegawai->no_hp ?>" required>
                    </div>
                    <div class="form-group ">Kota
                        <input type="text" name="kota" class="form-control" value="<?= $pegawai->kota ?>" required>
                    </div>

                

                   <div class="form-group">
                    <label style="font-style: italic;"> <i class="fa fa-archive text-fuchsia"></i> Nama unit / Departemen  </label>
                    <?php echo form_dropdown('departemen' , $departemen , $selecteddepartemen , [ 'class' => 'form-control' , 'required' => 'required']) ?>
                   </div>

                   <div class="form-group">
                    <i class="fa fa-archive text-red"></i> Cabang Perushaan
                        <?php echo form_dropdown('cabang' , $cabang , $selectedcabang , [ 'class' => 'form-control' , 'required' => 'required']) ?>
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