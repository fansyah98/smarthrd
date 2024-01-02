<section class="content-header">
  <h1>Data 
    <small> Magang </small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="<?= site_url('dashboard') ?>"> <i class="fa fa-dashboard "></i> Dashboard </a> </li>
    <li><a href="<?= site_url('magang') ?>">  Data Magang </a></li>
  </ol>

</section>


<section class="content">
  <?php $this->load->view('message') ?>
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"> Data Magang  </h3>
      <div class="pull-right">
        <a href="<?= site_url('magang/add') ?>" class="btn btn-primary btn-lg-6 "><i class="fa fa-user-plus "></i>Tambah Data Magang</a>
      </div>
    </div>
    <div class="box-body">
      <table class="table table-bordered  table-responsive" id="table2">
        <thead>
          <tr>
            <th >No</th>
            <th >NIM</th>
            <th >Nama</th>
            <th >Semester</th>
            <th >JL</th>
            <th >Universitas</th>
            <th >Jurusan</th>
            <th sty class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($row->result() as $sayang => $data) { ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data->nim ?></td>
              <td><?= $data->nama ?></td>
              <td><?= $data->semester ?></td>
              <td><?= $data->gender == 1 ? "Laki Laki" : "Perempuan " ?></td>
              <td><?= $data->universitas ?></td>
              <td><?= $data->jurusan ?></td>

              <td>
                <a href="<?= site_url('magang/del/' . $data->id_magang) ?>" class="btn btn-success btn-lg-6" onclick="return confirm('Yakin Hapus Data !!! ')"><i class="fa fa-trash"></i></a>
                <a href="<?= site_url('magang/edit/' . $data->id_magang) ?>" name="id" class="btn btn-danger btn-lg-6 "> <i class="fa fa-pencil"></i></a>
              </td>
            </tr>
        </tbody>
      <?php } ?>
      </table>
    </div>
  </div>
</section>