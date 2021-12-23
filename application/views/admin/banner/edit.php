<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
<section class="content">
      <div class="row">
          <!-- general form elements -->
          <script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
			</script>
          <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
                      <?php 
// Error input Trigger Alert
echo validation_errors('<div class="alert alert-warning">', '</div>');

echo form_open_multipart(base_url('admin/banner/simpan_edit'));
 ?>
              <div class="box-body">
              	<?php foreach($tampil as $tampil) { ?>
                <div class="form-group">
                  <label for="id">ID banner</label>
                  <input type="text" class="form-control" id="id" name="id" placeholder="Masukan ID Banner" value="<?php echo $tampil->id_banner ?>" readonly="readonly">
                </div>
               
                <div class="form-group">
                  <label for="judul">Nama banner</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Banner" value="<?php echo $tampil->nama_banner ?>" required>
                </div>
                <div class="form-group">
                	<label for="pembuat">Deskripsi</label>
                  <textarea id="editor1" name="editor1" rows="10" cols="80">
                  	<?php echo $tampil->keterangan ?>
                    </textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputFile">Foto Banner</label>
                  <input type="file" id="filefoto" name="filefoto" value="<?php echo $tampil->foto_banner ?>">
                  <p class="help-block">Masukan Foto Dengan Rasio 2:1</p>
                </div>
                
              </div>
              <!-- /.box-body -->
              <?php } ?>

              <div class="box-footer">
                <center><button type="submit" class="btn btn-primary">Ubah</button></center>
              </div>
          
            <?php 
echo form_close();
  ?>
      </div>
</section>
          <!-- /.box -->
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

