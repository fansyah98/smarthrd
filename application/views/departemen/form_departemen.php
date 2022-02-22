<section class="content-header">
    <h1>  Tambah Data
        <small> Derpatemen Perusahaan</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>" ><i class="fa fa-dashboard text-aqua"></i></a>HOME</li>
        <li> <a href="<?= site_url('departemen')?>"> <i class="fa fa-database text-blue" ></i> DATA DEPARTEMEN </a></li>
        <li> <a href="<?=site_url('departemen/add')?>"> <i class="fa fa-user-plus text-danger"></i> TAMBAH DATA </a></li>
    </ol>

</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Tambah Data Jabatan </h3>
                <div class="pull-right">
                    <a href="<?=site_url('departemen') ?>" class=" btn btn-success btn-sm btn-flat"> <i class="fa fa-undo"></i></a>
                </div>
        </div>
  

    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="<?=site_url('departemen/prosess')?>" method="POST">

                    <div class="form-group">
                       
                        <input type="hidden" name="id" value="<?=$departemen->id_jabatan ?>">
     
                    </div>

                    <div class="form-group">
                        <label style="font-style: italic;"> <i class=" fa fa-user text-warning"></i> Kode</label>
                        <input type="text" name= "kode" class="form-control" value="<?=$departemen->kode?>">
                    </div>

                    <div class="form-group">
                        <label style="font-style: italic;"> <i class=" fa fa-user text-warning"></i> Unit / Departemen</label>
                        <input type="text" name= "name" class="form-control" value="<?=$departemen->name?>">
                    </div>


                    <div class="form-group">
                       <button type="submit" name="<?= $page ?>" class="btn btn-warning">  <i class=" fa fa-save"></i> </button>
                        <button type="reset" class="btn btn-danger "> <i class="fa fa-undo"></i> </button>
                    </div>




                
                </form>
            </div>
        </div>
    </div>

    </div>
</section>