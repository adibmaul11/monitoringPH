<?php $i = 1; foreach($pesan as $pesan) { ?>

          <div class="box">
            <div class="box-header with-border">
             	<h3 class="box-title">Pesan Dari : <?php echo $pesan->pesan_nama ?></h3>
            	<h5>Email   : <?php echo $pesan->pesan_email ?></h5>
            	<h5>Phone   : <?php echo $pesan->pesan_nophone ?></h5>
              <h5>Tanggal : <?php
              $tanggal = date("d F Y",strtotime($pesan->pesan_tanggal));
              echo $tanggal;?></h5>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-10">
            <p><?php echo $pesan->pesan_isi ?></p>
            </div>
            <div class="col-md-2">
<a href="<?php echo base_url('admin/pesan/simpan_edit/').$pesan->pesan_id ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Archive</a>
        <a href="<?php echo base_url('admin/pesan/hapus/').$pesan->pesan_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus data ini ? ')"><i class="fa fa-trash-o"></i> Hapus</a>              
            </div>
            </div>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
<?php } ?>