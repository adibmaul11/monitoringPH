
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Tambah Sistem Monitoring</h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                <script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>
          <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
                      <?php 
// Error input Trigger Alert
echo validation_errors('<div class="alert alert-warning">', '</div>');

echo form_open_multipart(base_url('monitoring/simpan_data'));
 ?>
                  <div class="x_title">
                    <h2>Tambah Data Monitoring <small>tambah data manual</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">PH Air <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="mon_ph" name="mon_ph" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Suhu Air <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="last-name" name="mon_suhu" required="required" class="form-control">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">

                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                    <?php 
echo form_close();
  ?>
                  </div>
                </div>
              </div>
            </div>

            </div>
            </div>
          </div>
        </div>