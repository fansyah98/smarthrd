<section class="content-header">
      <h1>
        Data Users
        <small>Halaman Users / Admin </small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard text-primary"></i> HOME</a></li>
      <li><a href="<?=site_url('user')?>"><i class="fa fa-database text-success"></i> DATA PEGAWAI </a></li>
        
      </ol>
</section>

<section class="content">
  <?php $this->load->view('message')?>
      <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Halaman Data Users </h3>
            <div class="pull-right">
                  <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat btn-xs "><i class="fa fa-user-plus "></i></a>
            <a href="" class="btn btn-warning btn-flat btn-xs "><i class="fa fa-print "></i></a>
        </div>
      </div>
         
            <div class="box-body">
              <table  class="table table-bordered table-striped table-responsive" id="table2">
                  <thead>
                    <tr>
                        <th style="font-style: italic;">No</th>
                        <th style="font-style: italic;">Name</th>
                        <th style="font-style: italic;">Username</th>
                        <th style="font-style: italic;">TTL</th>
                        <th style="font-style: italic;">Level</th>
                        <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                     $no = 1 ;
                     foreach ($user->result() as $kamu => $data ){ ?>
                      <td>  </i><?= $no++ ?></td>
                      <td><?= $data->name ?></td>
                      <td><?= $data->username ?></td>
                      <td><?= $data->address?></td>
                      <td><?= $data->level  == 2 ? "Human Resource Department" : "Direksi Perusahaan"?></td>  
                      <td>
                        <form action="<?=site_url('user/del/' . $data->user_id)?>" method="POST">
                          <input type="hidden" name="user_id" value="<?= $data->user_id?>">
                            <button class="btn btn-primary btn-xs" onclick="return confirm('Yakin Data Di Hapuss!!')" ><i class="fa fa-trash"> </i></button>
                            <a  href="<?=site_url('user/edit/' . $data->user_id) ?>"  class="btn btn-success btn-xs"><i class="fa fa-pencil "></i></a>
                        </form>
                      </td>
                  
                  </tbody>
                  <?php } ?>
              </table>
            </div>
          </div>
</section>


