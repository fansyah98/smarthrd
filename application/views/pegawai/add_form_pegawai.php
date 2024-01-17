<section class="content-header">
    <h1>  Tambah 
        <small> Data Pegawai</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>" ><i class="fa fa-dashboard "></i></a>Dashboard</li>
        <li> <a href="<?= site_url( 'pegawai')?>" > </a> Data Pegawai</li>
        <li> <a href="<?= site_url( 'pegawai/add')?>" > </a> Tambah Pegawai</li>
    </ol>

</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Tambah Data Pegawai</h3>
                <div class="pull-right">
                    <a href="<?= site_url('pegawai') ?>"  class=" btn btn-success btn-sm btn-flat"> <i class="fa fa-undo"></i></a>
                </div>
        </div>
  

    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <form action="<?= site_url('pegawai/process') ?>" method="POST">
                <div class="row">
                    <div class="form-group col-xs-3">
                        <input type="hidden" name="id" class="form-control" value="<?= $pegawai->id_karyawan?>">
                        <label >  Nomor Induk Keluarga </label>
                        <input type="text" name="nik" class="form-control" value="<?= $pegawai->nik?>" required>
                    </div>
                    <div class="form-group col-xs-3">
                        <label >NIP Pegawai   </label>
                        <input type="text" name="nip" class="form-control " value="<?= $pegawai->nip ?>" required>
                    </div>
                    <div class="form-group col-xs-3">
                        <label >Nama Lengkap   </label>
                        <input type="text" name="name" class="form-control " value="<?= $pegawai->name ?>" required>
                    </div>
                    <div class="form-gruop col-xs-3">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="">- pilih data - </option>
                            <option value="1" <?= $pegawai->jenis_kelamin == 1 ? 'selected' : null ?>>Perempuan </option>
                            <option value="2" <?= $pegawai->jenis_kelamin == 2 ? 'selected' : null ?>>Laki Laki </option>
                        </select>
                    </div>  
                </div>

               
                <div class="form-group "></i>
                 <label for="">Alamat Rumah</label>  
                        <input type="text" name="alamat" class="form-control" value="<?= $pegawai->alamat ?>" required>
                </div>

                <div class="row">
                    <div class="form-group col-xs-2"> 
                         <label for="">Tanggal lahir</label>
                            <input type="date" name="date" class="form-control" value="<?= $pegawai->ttl ?>" required>
                    </div>
                    <div class="form-group col-xs-2"> 
                           <label for="">Tempat lahir</label>
                            <input type="text" name="kota_asal" class="form-control" value="<?= $pegawai->Kota_asal ?>" required>
                    </div>
                    <div class="form-group col-xs-2">
                        <label for=""> Warga Negara</label>
                        <input type="text" name="wn" class="form-control" value="<?= $pegawai->wn ?>" required>
                    </div>
                    <div class="form-group col-xs-2"> 
                        <label for="">Golongan darah</label> 
                        <input type="text" name="gologan_darah" class="form-control" value="<?= $pegawai->golongan_darah ?>" required>
                    </div>
                    <div class="form-group col-xs-2"> 
                         <label for="">Nomor Hp </label>
                        <input type="number" name="no_hp" class="form-control" value="<?= $pegawai->no_hp ?>" required>
                    </div>
                    <div class="form-group col-xs-2 ">
                         <label for="">Kota Asal</label>
                        <input type="text" name="kota" class="form-control" value="<?= $pegawai->kota ?>" required>
                    </div>
                </div>
              
                <div class="row">
                    <div class="form-group col-xs-6">
                             <label for="">Jabatan</label> 
                             <?php echo form_dropdown('departemen' , $departemen , $selecteddepartemen , [ 'class' => 'form-control' , 'required' => 'required']) ?>

                    </div>
                    <div class="form-gruop col-xs-6">
                        <label for="">Kantor Cabang</label> 
                        <?php echo form_dropdown('cabang' , $cabang , $selectedcabang , [ 'class' => 'form-control' , 'required' => 'required']) ?>
                    </div>  
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