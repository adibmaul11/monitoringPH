<header class="hero-banner project-bg">
    <a class="navbar-brand" href="<?php echo base_url('home') ?>">
      <img src="<?php echo base_url() ?>assets/imagess/logoo.png" alt="">
    </a>
    <div class="container">
      <h2 class="section-intro__subtitle"><?php echo $title ?></h2>
      <div class="btn-group breadcrumb">
        <a href="<?php echo base_url('home') ?>" class="btn">Home</a>
        <span class="btn btn--rightBorder">kendaraan</span>
      </div>
    </div>
  </header>

	<!-- Start post-content Area -->
	<section class="post-content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 posts-list">
					
					<div class="single-post row">
						<div class="col-lg-12 col-md-12">
							<div class="row">
								<?php 
								if($jumlah==0){
									echo"<center><h2>Kendaraan Belum Tersedia</h2></center>";
								}else{
									foreach ($kendaraan as $kendaraan) {
										$isian_kendaraan = str_replace("<p>", "", $kendaraan->deskripsi);
										$isian_kendaraan1 = str_replace("</p>", "", $isian_kendaraan);

										?>
										<div class="col-lg-4 col-md-4" style="margin-bottom: 50px">

											<h4 class="section-intro__title left-border"><?php echo $kendaraan->sub_kategori ?></h4>
											<div class="feature-img">
												<img class="img-fluid" src="<?php echo base_url()?>/assets/images/kendaraan/<?php echo $kendaraan->foto_kendaraan ?>" alt="<?php echo $kendaraan->nama_kendaraan ?>">
											</div>

											<a class="posts-title" href="<?php echo base_url('kendaraan/view1/'.$kendaraan->slug_kendaraan) ?>"><h3><?php echo $kendaraan->nama_kendaraan ?></h3></a>
											<p class="excert">
												<?php echo substr($isian_kendaraan1,0,100).".....";?>
											</p>
											<a href="<?php echo base_url('kendaraan/view/'.$kendaraan->slug_kendaraan) ?>" class="primary-btn">Spesifikasi</a>
											<a href="<?php echo base_url('kendaraan/download/'.$kendaraan->slug_kendaraan) ?>" class="primary-btn">Brosure</a>
										</div>
										<?php } }?>
									</div>
								</div>
							</div>
					
					
					<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							
							<li class="page-item"><li><?php echo $pagination; ?></li></li>
							
						</ul>
					</nav>
				</div>
				<div class="col-lg-3 sidebar-widgets">
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