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

echo form_open_multipart(base_url('admin/profil/edit_data'));
 ?>
              <div class="box-body">
              	<?php foreach($tampil as $tampil) { ?>
                <div class="col-xs-8">
                <div class="form-group">
                  <label for="id">ID Profil</label>
                  <input type="text" class="form-control" id="id_profil" name="id_profil" placeholder="Masukan ID Profil" value="<?php echo $tampil->id_profil ?>" readonly="readonly">
                </div>
                
               <div class="form-group">
                  <label for="judul">Nama Perusahaan</label>
                  <input type="text" class="form-control" id="nama_restoran" name="nama_restoran" placeholder="Masukan Nama Perusahaan" required value="<?php echo $tampil->nama_restoran ?>">
                </div>
                 <div class="form-group">
                  <label for="judul">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Anda" required value="<?php echo $tampil->alamat ?>">
                </div>
                <div class="form-group">
                  <label for="judul">Google Maps</label>
                  <input type="text" class="form-control" id="g_maps" name="g_maps" placeholder="Masukan Link Google Maps Restoran" required value="<?php echo $tampil->g_maps ?>">
                </div>

              </div>
              <div class="col-xs-4">
                
                <div class="form-group">
                  <label for="judul">No Telp</label>
                  <input type="telp" class="form-control" id="no_telp" name="no_telp" placeholder="Masukan Nomor Telepon"  required value="<?php echo $tampil->no_telp ?>">
                </div>
                <div class="form-group">
                  <label for="judul">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Anda" required value="<?php echo $tampil->email ?>">
                </div>
                <div class="form-group">
                <label for="exampleInputFile">Foto Logo</label>
                <input name="filefoto" type="file" id="exampleInputFile" value="<?php echo $tampil->logo ?>">
                <p class="help-block">Masukan Foto Maximal 2 MB</p>
                </div>
              </div>
              <div class="col-xs-12">
              <div class="form-group">
                  <label for="pembuat">Tentang</label>
                  <textarea id="editor1" name="editor1" rows="10" cols="80">
                    <?php echo $tampil->tentang ?>
                    </textarea>
                </div>
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

