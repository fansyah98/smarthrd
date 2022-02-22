<section class="content-header">
<h1> Edit Data karyawan
    <small>Halaman Edit</small>
</h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"> <i class=" fa fa-dashboard text-aqua"></i>Home</a></li>
        <li><a href="<?= site_url('user')?>"> <i class=" fa fa-database text-yellow"></i>Data User</a></li>
        <li><a href="<?= site_url('user/edit')?>" ><i class="fa fa-pencil text-danger"></i>Edit Data</a></li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Mengubah Data User</h3>
                <div class="pull-right">
                    <a href="<?= site_url('user')?>" class="btn btn-success btn-sm btn-flat"><i class=" fa fa-undo"></i></a>
                    <a href="<?= site_url('user/download')?>" class="btn btn-warning btn-sm btn-flat"><i class=" fa fa-save"></i></a>
                </div>
        </div>
    

    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" >
                <form action="" method="POST">
                <input type="hidden" name="id" class="form-control"  value="<?=$user->user_id?>">
                <div class="form-group">
                    <label style="font-style: italic;"> <i class="fa fa-user-plus text-aqua"></i> Nama Lengkap Anda </label>
                    <input type="text" name="name" class="form-control " placeholder="Nama Lengkap Anda" value="<?=$user->name ?>">
                </div>

                <div class="form-group">
                    <label style="font-style: italic;"> <i class="fa fa-cube text-warning"></i> Username</label>
                        <input type="text " name="username" class="form-control" placeholder="masukan username" value="<?= $user->username ?>">
                </div>

                <div class="form-group">
                    <label style="font-style: italic;"> <i class="fa fa-lock text-danger"></i> Password</label>
                        <input type="password" class="form-control" placeholder="Masukan Password anda" >
                </div>

                <div class="form-group">
                    <label style="font-style: italic;"> <i class="fa fa-lock text-green"></i> Password Konfimasi</label>
                        <input type="password" name="passconf" class="form-control " placeholder="Masukan Konfimasi Password">
                </div>

                <div class="form-group">
                    <label style="font-style: italic;"> <i class="fa fa-cubes text-blue"></i> TTL</label>
                      <input type="text" class="form-control" name="alamat" value="<?= $user->address?>">      
                </div>
                
                <div class="form-group  <?= form_error('level') ?>">
                    <label style="font-style: italic;"> <i class=" fa fa-paper-plane-o text-blue"></i>  Level   </label>
                    <select name="level"  class="form-control">
                        <option value=""> Pilih</option>
                        <option value="1" <?= $user->level == 1 ? 'selected' : null ?>>Direksi Perusahaan</option>
                        <option value="2" <?= $user->level == 2 ? 'selected' : null ?>>HRD</option>
                    </select>
                    <span class="has-block"> <?= form_error('level') ?></span>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-sm btn-flat" class="form-control"><i class="fa fa-save"></i></button>
                    <button type="reset" class="btn btn-danger btn-sm btn-flat"    > <i class="fa fa-undo text-lime"> </i></button>
                </div>

                </form>
            </div>
        </div>
    
    
    </div>

    </div>
</section>

