<section class="content-header">
  <h1>Data Magang / PKL
    <small> Mahasiswa / Mahasiswi </small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="<?= site_url('dashboard') ?>"> <i class="fa fa-dashboard text-aqua"></i> HOME </a> </li>
    <li><a href="<?= site_url('magang') ?>"> <i class="fa fa-database text-yellow"></i> DATA MAGANG/PKL </a></li>
  </ol>

</section>


<section class="content">
  <?php $this->load->view('message') ?>
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"> Halaman Data Magang/PKL </h3>
      <div class="pull-right">
        <a href="<?= site_url('magang/add') ?>" class="btn btn-primary btn-flat btn-xs "><i class="fa fa-user-plus "></i></a>
        <a href="" class="btn btn-danger btn-flat btn-xs "><i class="fa fa-print "></i></a>
      </div>
    </div>
    <div class="box-body">
      <table class="table table-bordered table-striped table-responsive" id="table2">
        <thead>
          <tr>
            <th style="font-style: italic;">No</th>
            <th style="font-style: italic;">NIM</th>
            <th style="font-style: italic;">Nama</th>
            <th style="font-style: italic;">Semester</th>
            <th style="font-style: italic;">JL</th>
            <th style="font-style: italic;">Universitas</th>
            <th style="font-style: italic;">Jurusan</th>
            <th style="font-style :italic ;" class="text-center">Action</th>
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
                <a href="<?= site_url('magang/del/' . $data->id_magang) ?>" class="btn btn-success btn-xs" onclick="return confirm('Yakin Hapus Data !!! ')"><i class="fa fa-trash"></i></a>
                <a href="<?= site_url('magang/edit/' . $data->id_magang) ?>" name="id" class="btn btn-danger btn-xs "> <i class="fa fa-pencil"></i></a>
              </td>
            </tr>
        </tbody>
      <?php } ?>
      </table>
    </div>
  </div>
</section>