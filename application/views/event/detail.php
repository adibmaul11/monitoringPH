 <header class="hero-banner project-bg">
    <a class="navbar-brand" href="<?php echo base_url('home') ?>">
      <img src="<?php echo base_url() ?>assets/imagess/logoo.png" alt="">
    </a>
    <div class="container">
      <h2 class="section-intro__subtitle"><?php echo $title ?></h2>
      <div class="btn-group breadcrumb">
        <a href="<?php echo base_url('home') ?>" class="btn">Home</a>
        <span class="btn btn--rightBorder">Event Details</span>
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
								<img class="img-fluid" src="<?php echo base_url()?>/assets/images/event/<?php echo $event->foto_event ?>" alt="">
							</div>
						</div>
						<div class="col-lg-3  col-md-3 meta-details">
							<?php 
					$bulan = date("F",strtotime($event->tgl_post));
					$tanggal = date("d",strtotime($event->tgl_post));
					$tahun = date("Y",strtotime($event->tgl_post));
				?>
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
								<p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span class="lnr lnr-bubble"></span></p>
								<ul class="social-links col-lg-12 col-md-12 col-6">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-github"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<h3 class="mt-20 mb-20 text-white"><?php echo $event->judul_event ?></h3>
							<p class="excert">
								<?php echo $event->isi_event ?>
							</p>
							
						</div>
						
					</div>
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