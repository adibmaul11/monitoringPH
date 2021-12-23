<header class="hero-banner project-bg">
    <a class="navbar-brand" href="<?php echo base_url('home') ?>">
      <img src="<?php echo base_url() ?>assets/imagess/logoo.png" alt="">
    </a>
    <div class="container">
      <h2 class="section-intro__subtitle"><?php echo $title ?></h2>
      <div class="btn-group breadcrumb">
        <a href="<?php echo base_url('home') ?>" class="btn">Home</a>
        <span class="btn btn--rightBorder">Event</span>
      </div>
    </div>
  </header>

	<!-- Start post-content Area -->
	<section class="post-content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<?php 
                        if($jumlah==0){
                            echo"<center><h2>Event Belum Tersedia</h2></center>";
                        }else{
				foreach ($event as $event) {

					$bulan = date("F",strtotime($event->tgl_post));
					$tanggal = date("d",strtotime($event->tgl_post));
					 $tahun = date("Y",strtotime($event->tgl_post));
					$isian_event = str_replace("<p>", "", $event->isi_event);
					$isian_event1 = str_replace("</p>", "", $isian_event);
					
				?>
					<div class="single-post row">
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#">Food,</a></li>
								<li><a href="#">Technology,</a></li>
								<li><a href="#">Politics,</a></li>
								<li><a href="#">Lifestyle</a></li>
							</ul>
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $tanggal." ".$bulan." , ".$tahun?></a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 ">
							<div class="feature-img">
								<img class="img-fluid" src="<?php echo base_url()?>/assets/images/event/<?php echo $event->foto_event ?>" alt="<?php echo $event->judul_event ?>">
							</div>
							<a class="posts-title" href="blog-single.html"><h3><?php echo $event->judul_event ?></h3></a>
							<p class="excert">
								<?php echo substr($isian_event1,0,500).".....";?>
							</p>
							<a href="<?php echo base_url('event/view/'.$event->slug_event) ?>" class="primary-btn">View More</a>
						</div>
					</div>
					<?php } }?>
					
					<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							
							<li class="page-item"><li><?php echo $pagination; ?></li></li>
							
						</ul>
					</nav>
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						
						<div class="single-sidebar-widget popular-post-widget">
							<h4 class="popular-title">Popular Posts</h4>
							<div class="popular-post-list">
								<?php foreach ($event_popular as $event_popular) {?>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="row">
									<div class="col-xs-12">
									<div class="thumb">
										<img class="img-fluid" src="<?php echo base_url()?>/assets/images/event/<?php echo $event_popular->foto_event ?>" alt="">
									</div>
									</div>
									<div class="col-xs-12" style="margin-top: 10px">
									<div class="details">
										<a href="<?php echo base_url('event/view/'.$event_popular->slug_event) ?>"><h6><?php echo $event_popular->judul_event ?></h6></a>
										<p><?php echo $event_popular->tgl_post ?></p>
									</div>
									</div>
									</div>
								</div>
									<?php }?>
								
							</div>
						</div>
						
						
						<div class="single-sidebar-widget newsletter-widget">
							<h4 class="newsletter-title">Newsletter</h4>
							<p>
								Here, I focus on a range of items and features that we use in life without giving them a second thought.
							</p>
							<div class="form-group d-flex flex-row">
								<div class="col-autos">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
										</div>
										<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
										 onblur="this.placeholder = 'Enter email'">
									</div>
								</div>
								<a href="#" class="bbtns">Subcribe</a>
							</div>
							<p class="text-bottom">
								You can unsubscribe at any time
							</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>