<section class="content-header">
    <h1> Data
        <small>Account User</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class=" fa fa-dashboard text-aqua"></i>Home</a></li>
        <li> <a href="<?=site_url('user')?>"><i class="fa fa-database text-blue"></i>Data Users</a></li>
    </ol>
</section>

<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Tambah Data Account  Users </h3>
       <div class="pull-right">
        <a href="<?=site_url('user')?>" class="btn btn-primary btn-lg-6 ">
         <i class="fa fa-undo "></i> Data Account User 
        </a>
       </div>
    </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
               
                <form action="<?= site_url('user/add')?> " method="POST">
                        <div class="form-group <?= form_error('name') ? 'has-error' : null?>">
                            <label for="name"  >Masukan Nama Lengkap </label>
                            <input type="text" name="name" class="form-control"  placeholder="masukan nama lengkap"  <?= set_value('name')?>>
                            <span class="has-block"><?= form_error('name')?></span>
                        </div>

                        <div class="form-group <?= form_error('username') ? 'has-errro ' : null ?>">
                            <label for="name"  > Username </label>
                            <input type="text" name="username" class="form-control"  placeholder="Username" <?= set_value('username') ?>>
                            <span class="has-block"><?= form_error('username') ?></span>
                        </div>

                        <label > Password  </label>                 
                        <div class="form-group <?= form_error('passowrd')?> ">
                            <span class="input-group" class="form-control"></span>
                            <input type="password" name="password" class="form-control"  placeholder="Password" <?= set_value('password') ?>>
                            <span class="has-block"> <?= form_error('password') ?></span>
                        </div>

                      <label > Password Konfirmasi </label>                 
                        <div class="form-group  <?= form_error('passconf') ?>">
                            <span class="input-group" class="form-control"></span>
                            <input type="password" name="passconf" class="form-control"  placeholder="Password Konfimasi" <?= set_value('passconf')?>>
                            <span class="has-block"><?= form_error('passconf')?></span>
                        </div>

                        <div class="form-group <?= form_error('alamat') ?>">
                            <label   ><i class="fa fa-user text-blue"></i> TTL </label>
                            <textarea type="text" name="alamat" class="form-control"  placeholder="masukan nama alamat anda" <?= site_url('alamat') ?>></textarea>
                            <span class="has-block"><?= form_error('alamat')?></span>
                        </div>

                        <div class="form-group  <?= form_error('level') ?>">
                            <label> Level   </label>
                            <select name="level" id="" class="form-control">
                                <option value="">Pilih</option>
                                <option value="HRD" <?= set_value('level') == 'HRD' ? "selected"  : null ?>>HDR</option>
                                <option value="karyawan" <?= set_value('level') == 'karyawan' ? "selected"  : null ?>>karyawan</option>
                            </select>
                            <span class="has-block"> <?= form_error('level') ?></span>
                        </div>

                        <div class="form-group ">
                            <button type="submit" class="btn btn-success btn-sm btn-flat" ><i class="fa fa-paper-plane-o"> </i></button>
                            <button type="reset" class="btn btn-danger btn-sm btn-flat" ><i class="fa fa-undo"> </i></button>
                        </div>

                       
                </form>
        
  </div>
</section>
