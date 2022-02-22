<section class="content-header">
      <h1>
        Profil 
        <?php
        foreach($pegawai->result() as $sayang => $data ) { ?>
        <small>Karyawan  > <?= $data->name ?> <i class="fa fa-lock">  </i> NIK : <?= $data->nik ?> </small>
      </h1>
      <?php } ?>
      <ol class="breadcrumb">
      <li><a href="<?= site_url('pegawai' ) ?>" title="back" class="btn btn-sm btn-danger m-b-10"><i class="fa fa-step-backward"></i> &nbsp;Back</a></li>
	<li><a href=" "  title="cetak" class="btn btn-sm btn-success m-b-10"><i class="fa fa-print"></i> &nbsp;Cetak</a></li>
      </ol>
</section>
<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive " src="<?= base_url()?>assets/dist/img/halo.jpg" width='160' height='220' alt="User profile picture">
              <?php foreach($pegawai->result() as $sayang => $data ) { ?>  
                <button type="button" class="btn btn-success btn-xs btn-block" data-toggle="modal" data-target=".tambah-poto"> <i class="fa fa-image">  <?= $data->nik ?></i></button>
              <?php } ?>
            </div>
        </div>

                 <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          
        

      </div>

      <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Biodata </a></li>
              <li><a href="#Pendidikan" data-toggle="tab">Pendidikan</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="table table-table-bordered table-responsive">
                  <table class="tabel table-striped">
                    <thead>
                      <tr>
                        <th>
                          <h6> <span class="btn bg-maroon  btn-xs ">Biodata Karyawan</span>  </h6>
                        </th>
                        <th>
                        <?php
                        foreach($pegawai->result() as $sayang => $data ) { ?> 
                          <h1> <span class="btn btn-success btn-xs "><?= $data->name ?></span>  </h1>
                          <?php } ?>
                        </th>
                      </tr>            
                    </thead>
                    <?php 
                    foreach($pegawai->result() as $sayang => $data ) { ?> 
                    <tbody>
											<tr class="highlight">
												<td >NIK</td> 
                        <td>:<?= $data->nik ?> </td>
											</tr>
											<tr class="divider">
												<td colspan="2"></td>
											</tr>
											<tr>
												<td class="field">Jenis Kelamin</td>
												<td><i class="fa fa-intersex fa-lg m-r-5"></i> <?= $data->jenis_kelamin == 2 ? "Laki - laki " : " Perempuan " ?></td>
											</tr>
											<tr>
												<td class="field">Unit</td>
												<td><?= $data->level_jabatan ?></td>
											</tr>
                      <tr>
												<td class="field">Jabatan</td>
												<td><?= $data->jabatan ?></td>
											</tr>
											<tr>
												<td class="field">Alamat</td>
												<td><i class="fa fa-map-marker fa-lg m-r-5"></i> <?= $data->alamat?></td>
											</tr>
											<tr>
												<td class="field">Kota</td>
												<td><?= $data->Kota_asal ?></td>
											</tr>
											<tr>
												<td class="field">Kota Asal</td>
												<td><?= $data->kota ?></td>
											</tr>
											<tr>
												<td class="field">Tempat Tanggal Lahir</td>
												<td><?= $data->kota ?> , <?= $data->ttl ?> </td>
											</tr>
											<tr>
												<td class="field">Umur</td>
												<td>31 Tahun, 9 Bulan, 17 Hari</td>
											</tr>
											<tr>
												<td class="field">Agama</td>
												<td>Islam</td>
											</tr>
											<tr>
												<td class="field">WN</td>
												<td><?= $data-> wn ?> </td>
											</tr>
											<tr>
												<td class="field">Status Perkawinan</td>
												<td>K/2</td>
											</tr>
											<tr>
												<td class="field">Status Pph</td>
												<td>K/2</td>
											</tr>
											<tr>
												<td class="field">Golongan Darah</td>
												<td><?= $data->golongan_darah ?> </td>
											</tr>
											<tr>
												<td class="field">No. Telp</td>
												<td><i class="fa fa-mobile fa-lg m-r-5"></i> <?= $data->no_hp ?> </td>
											</tr>
											<tr>
												<td class="field">No. BPJS Kesehatan</td>
												<td>000000657836123</td>
											</tr>
											<tr>
												<td class="field">No. BPJS Ketenagakerjaan</td>
												<td>000000657836123</td>
											</tr>
											<tr>
												<td class="field">No. BPJS Pensiun</td>
												<td>000000657836123</td>
											</tr>
										</tbody>
                  <?php } ?>
                  </table>

                </div>
                <!-- /.post -->
              </div>
              
              <!-- /.tab-pane -->
              <div class="tab-pane" id="Pendidikan">
              <section class="content">
                  <table class="table table-bordered table-responsive ">
                      <thead>
                        <tr>
                          <th>NO</th>
                          <th>Tingkat </th>
                          <th>Jurusan  </th>
                          <th>Asal Kampus / PT  </th>
                          <th>Lokasi </th>
                          <th>Tahun lulus </th>
                          <th>No Ijazah  </th>
                        </tr>
                      </thead>
                  </table>
              </section>

              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      
   
</section>
 


 <!---Modal Tambah data  riwaya pendidikan data -->
<div class="modal fade tambah-poto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukan Poto Anda disini</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
           
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send message</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!---Modal Upload File data -->