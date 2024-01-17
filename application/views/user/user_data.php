<section class="content-header">
      <h1>
        Data 
        <small>Account User </small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard "></i> Dashboard</a></li>
      <li><a href="<?=site_url('user')?>"> Pegawai </a></li>
        
      </ol>
</section>

<section class="content">
  <?php $this->load->view('message')?>
      <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Halaman Account User </h3>
            <div class="pull-right">
                  <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-lg-6 "><i class="fa fa-user-plus "></i>Tambah Account User</a>
        </div>
      </div>    
            <div class="box-body">
              <table  class="table table-bordered table-striped table-responsive" id="table2">
                  <thead>
                    <tr>
                        <th >No</th>
                        <th>Name</th>
                        <th >Username</th>
                        <th >TTL</th>
                        <th>Level</th>
                        <th>Action</th>
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
                      <td><?php if($data->level == 'HRD') {
                          echo 'HRD';
                      }elseif ($data->level == 'Karyawan') {
                         echo 'Karyawan';
                      }?></td>  
                      <td>
                        <form action="<?=site_url('user/del/' . $data->user_id)?>" method="POST">
                          <input type="hidden" name="user_id" value="<?= $data->user_id?>">
                            <button class="btn btn-primary btn-lg-6" onclick="return confirm('Yakin Data Di Hapuss!!')" ><i class="fa fa-trash"> </i></button>
                            <a  href="<?=site_url('user/edit/' . $data->user_id) ?>"  class="btn btn-success btn-lg-6"><i class="fa fa-pencil "></i></a>
                        </form>
                      </td>          
                  </tbody>
                  <?php } ?>
              </table>
            </div>
          </div>
</section>


