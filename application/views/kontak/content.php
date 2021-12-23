
       <header class="hero-banner project-bg">
    <a class="navbar-brand" href="<?php echo base_url('home') ?>">
      <img src="<?php echo base_url() ?>assets/imagess/logoo.png" alt="">
    </a>
<div class="container">
      <h2 class="section-intro__subtitle">Contact Us</h2>
      <div class="btn-group breadcrumb">
        <a href="<?php echo base_url('home') ?>" class="btn">Home</a>
        <span class="btn btn--rightBorder">Contact</span>
      </div>
    </div>
  </header>

  <?php foreach($profil as $profil) { ?>
  <section class="section-margin">
    <div class="container">
      <!-- google map start -->
      <div class="col-xs-12 d-none d-sm-block mb-5 pb-4">

        <iframe src="<?php echo $profil->g_maps; ?>"
            class="map" style="border:0" allowfullscreen="" height="400px" width="100%"></iframe>

      </div>
      <!-- google map end -->


      <div class="row align-items-center">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="lnr lnr-home"></i></span>
            <div class="media-body">
              <h3>Indonesia</h3>
              <p>Rawa Panjang, Bekasi</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="lnr lnr-phone-handset"></i></span>
            <div class="media-body">
              <h3><a href="tel:<?php echo $profil->no_telp; ?>"><?php echo $profil->no_telp; ?></a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="lnr lnr-envelope"></i></span>
            <div class="media-body">
              <h3><a href="mailto:<?php echo $profil->email; ?>"><?php echo $profil->email; ?></a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
           <?php } ?>
        
        <div class="col-md-8 col-lg-9">
            <?php 
// Error input Trigger Alert
echo validation_errors('<div class="alert alert-warning">', '</div>');

echo form_open(base_url('kontak'));
 ?>
          <form class="form-contact">
             
                        <style type="text/css" media="screen">
                            #success {
                                cursor: pointer;
                                position: fixed;
                                right: 0px;
                                z-index: 9999;
                                bottom: 0px;
                                margin-bottom: 22px;
                                margin-right: 15px;
                                min-width: 300px; 
                                max-width: 800px;  
                            }
                        </style>
            <div class="row">
              <div class="col-lg-5">
                <div class="form-group">
                  <input class="form-control" name="name" type="text" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" type="email" placeholder="Enter email address" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="phone" type="text" placeholder="Enter your phone">
                </div>
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                    <textarea class="form-control different-control w-100" name="message" id="textarea" cols="30" rows="6" placeholder="Enter Message"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right">
            <!--   <button type="submit" name="btn_pesan" class="btn active btn--leftBorder">Send Message</button> -->
               <input name="btn_pesan" type="submit" value="Send Message" class="btn active btn--leftBorder">
                                <div id="success"><?php echo $this->session->flashdata('success'); ?></div>
            </div>
          </form>
           <?php 
echo form_close();
  ?>
        </div>
      </div>
    </div>
  </section>
