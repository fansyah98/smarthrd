<section class="content-header">
    <h1>  Edit Data
        <small> Cabang Perusahaan</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>" ><i class="fa fa-dashboard text-aqua"></i></a>HOME</li>
        <li> <a href="<?= site_url('cabang')?>"> <i class="fa fa-database text-blue" ></i> DATA CABANG </a></li>
        <li> <a href="<?=site_url('cabang/add')?>"> <i class="fa fa-user-plus text-danger"></i> TAMBAH DATA </a></li>
    </ol>

</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?= $page?> </h3>
                <div class="pull-right">
                    <a href="<?=site_url('cabang') ?>" class=" btn btn-success btn-sm btn-flat"> <i class="fa fa-undo"></i></a>
                </div>
        </div>
  

    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="<?=site_url('cabang/prosess')?>" method="POST">

                    <div class="form-group">
                        <label style="font-style: italic;"> <i class=" fa fa-user text-warning"></i> Nama Cabang </label>
                        <input type="hidden" name="id" value="<?= $cabang->id_cabang ?> ">
                        <input type="text" name="name" class="form-control" value="<?= $cabang->name ?>" >
                    </div>

                   


                    <div class="form-group">
                       <button type="submit" name="<?= $page ?>"class="btn btn-warning">  <i class=" fa fa-save"></i> </button>
                        <button type="reset" class="btn btn-danger "> <i class="fa fa-undo"></i> </button>
                    </div>




                
                </form>
            </div>
        </div>
    </div>

    </div>
</section>