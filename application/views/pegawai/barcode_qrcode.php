<section class="content-header">
    <h1> Data 
        <small>Barcode Pegawai </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashnoard') ?>"><i class="fa fa-dashboard"></i></a> Dashboard</li>
        <li><a href="<?= site_url('dashnoard') ?>"></a> Barcode & QR Code</li>
    </ol>

</section>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Barcode Generator Absen <i class="fa fa-barcode"></i></h3>
            <div class="pull-right">
                <a href="<?= site_url('pegawai') ?>" class=" btn btn-success btn-sm btn-lg-6"> <i class="fa fa-undo"></i></a>
                <!-- <a href="" class=" btn btn-warning btn-sm btn-flat" target="_blank"> <i class="fa fa-download"></i></a> -->
            </div>
        </div>
        <div class="box-body">
        <?php
                require 'assets/vendor/autoload.php';
                $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                echo $generator->getBarcode($row->nip, $generator::TYPE_CODE_128);
                echo $row->name;
                // print_r($row);
            ?> 
           
           
        </div>
    </div>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Barcode Generator Barang <i class="fa fa-qrcode"></i></h3>
            <div class="pull-right">
                <a href="<?= site_url('pegawai') ?>" class=" btn btn-success btn-sm btn-lg-6"> <i class="fa fa-undo"></i></a>
               
                
            </div>
        </div>
        <div class="box-body">
  
        </div>
    </div>
</section>