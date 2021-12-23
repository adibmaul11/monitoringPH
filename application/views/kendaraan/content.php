 <header class="hero-banner project-bg">
    <a class="navbar-brand" href="<?php echo base_url('home') ?>">
      <img src="<?php echo base_url() ?>assets/imagess/logoo.png" alt="">
    </a>
    <div class="container">
      <h2 class="section-intro__subtitle"><?php echo $title ?></h2>
      <div class="btn-group breadcrumb">
        <a href="<?php echo base_url('home') ?>" class="btn">Home</a>
        <span class="btn btn--rightBorder">Kendaraan Details</span>
      </div>
    </div>
  </header>

	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<img class="img-fluid" src="<?php echo base_url()?>/assets/images/kendaraan/<?php echo $kendaraan->foto_kendaraan ?>" alt="">
							</div>
						</div>
						
						<div class="col-lg-12 col-md-12">
							<h3 class="mt-20 mb-20 text-white"><?php echo $kendaraan->nama_kendaraan ?></h3>
							<p class="excert">
								<?php echo $kendaraan->deskripsi ?>
							</p>
							
						</div>
						
					</div>
					<br>
					<center>

<center><a href="https://api.whatsapp.com/send?phone=6285813565662&amp;text=Halo%20Pak Marco,%20Saya%20Mau%20Order....."><img class="img-fluid" width="35%" src="<?php echo base_url()?>/assets/images/hubungi-kami-wa-1.png" alt=""></a></center>
					</center>
					<!-- <div class="navigation-area">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
								<div class="thumb">
									<a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
								</div>
								<div class="arrow">
									<a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
								</div>
								<div class="detials">
									<p class="mb-0">Prev Post</p>
									<a href="#"><h4 class="text-white">Space The Final Frontier</h4></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
								<div class="detials">
									<p class="mb-0">Next Post</p>
									<a href="#"><h4 class="text-white">Telescopes 101</h4></a>
								</div>
								<div class="arrow">
									<a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
								</div>
								<div class="thumb">
									<a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div> -->
					
					<div class="comment-form">
						<h4 class="text-white">Leave a Comment</h4>
						<form>
							<div class="form-group form-inline">
								<div class="form-group col-lg-6 col-md-12 name">
									<input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
								</div>
								<div class="form-group col-lg-6 col-md-12 email">
									<input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
							</div>
							<div class="form-group">
								<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
								 required=""></textarea>
							</div>
							<a href="#" class="primary-btn">Post Comment</a>
						</form>
					</div>
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="single-sidebar-widget post-category-widget">
							<h4 class="category-title">Catgories</h4>
							<ul class="cat-list">
								<?php foreach($kategori as $kategori) { ?>
								<li>
									<a href="<?php echo base_url('kendaraan/kategori/').$kategori->hint_kategori ?>" class="d-flex justify-content-between">
										<p><?php echo $kategori->nama_kategori ?></p>
									</a>
								</li>
								   <?php } ?>
							</ul>
						</div>
						
						<div class="single-sidebar-widget newsletter-widget">
							<h4 class="newsletter-title">Newsletter</h4>
							<p>
								Here, I focus on a range of items and features that we use in life without giving them a second thought.
							</p>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>