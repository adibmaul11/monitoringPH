<header class="hero-banner project-bg">
    <a class="navbar-brand" href="<?php echo base_url('home') ?>">
      <img src="<?php echo base_url() ?>assets/imagess/logoo.png" alt="">
    </a>
    <div class="container">
      <h2 class="section-intro__subtitle"><?php echo $title ?></h2>
      <div class="btn-group breadcrumb">
        <a href="<?php echo base_url('home') ?>" class="btn">Home</a>
        <span class="btn btn--rightBorder">Spesifikasi Kendaraan</span>
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

							<?php 
							if($jumlah==0){
								echo"<center><h2>Spesifikasi Kendaraan Belum Tersedia</h2></center>";
							}else{
								?>
								<section class="service section-margin mb-5 pb-5">
									<div class="container">
										<div class="section-intro">
											<h4 class="section-intro__title">Spesifikasi</h4>
											<h2 class="section-intro__subtitle bottom-border"><?php echo $kendaraan->nama_kendaraan ?></h2>
										</div>

										<div class="row">
											<div class="col-sm-12 col-lg-12">
												<div class="media service__single">
													<span class="service__singleIcon"><i class="ti-package"></i></span>
													<div class="media-body">
														<h3>DIMENSI</h3>
																	<div class="progress-table" style="background: transparent!important; width:100% !important; padding: 0 !important">
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Panjang Keseluruhan</div>
																		<div class="serial"><?php echo $kendaraan->panjang_keseluruhan ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Lebar Keseluruhan</div>
																		<div class="serial"><?php echo $kendaraan->lebar_keseluruhan ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Tinggi Keseluruhan</div>
																		<div class="serial"><?php echo $kendaraan->tinggi_keseluruhan ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Jarak Terendah</div>
																		<div class="serial"><?php echo $kendaraan->jarak_terendah ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Jarak Sumbu</div>
																		<div class="serial"><?php echo $kendaraan->jarak_sumbu ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Jarak Pijak Roda Depan</div>
																		<div class="serial"><?php echo $kendaraan->jarak_pijak_roda_depan ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Jarak Pijak Roda Belakang</div>
																		<div class="serial"><?php echo $kendaraan->jarak_pijak_roda_belakang ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Julur Depan Front Over Hang(FOH)</div>
																		<div class="serial"><?php echo $kendaraan->julur_depan_front_over_hang ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Julur Belakang Rear Over Hang(ROH)</div>
																		<div class="serial"><?php echo $kendaraan->julur_belakang_rear_over_hang ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Seating Capacity</div>
																		<div class="serial"><?php echo $kendaraan->seating_capacity ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Front Axle Capacity</div>
																		<div class="serial"><?php echo $kendaraan->front_axle_capacity ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Rear Axle Capacity</div>
																		<div class="serial"><?php echo $kendaraan->rear_axle_capacity ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																</div>
															
															
														
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-lg-12">
												<div class="media service__single">
													<span class="service__singleIcon"><i class="ti-home"></i></span>
													<div class="media-body">
														<h3>MESIN</h3>
														<div class="progress-table" style="background: transparent!important; width:100% !important; padding: 0 !important">
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Model/Tipe</div>
																		<div class="country"><?php echo $kendaraan->model_mesin ?></div>
																																				
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Sistem Injeksi Bahan Bakar</div>
																		<div class="country"><?php echo $kendaraan->sistem_injeksi ?></div>
																																			
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Isi Silinder</div>
																		<div class="country"><?php echo $kendaraan->isi_silinder ?> (cc)</div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Tenaga Maxsimum</div>
																		<div class="country"><?php echo $kendaraan->tenaga_max ?> (PS/rpm)</div>
																																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Torsi Maximum</div>
																		<div class="country"><?php echo $kendaraan->torsi_max ?> (Kgm/rpm)</div>
																																			
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Garis Tengah x Langkah</div>
																		<div class="country"><?php echo $kendaraan->garis_tengah ?> (mm)</div>
																																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Radius Putar</div>
																		<div class="country"><?php echo $kendaraan->radius_putar ?> (m)</div>
																																				
																	</div>
																	
																</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-lg-12">
												<div class="media service__single">
													<span class="service__singleIcon"><i class="ti-brush-alt"></i></span>
													<div class="media-body">
														<h3>BAN & VELG</h3>
														<div class="progress-table" style="background: transparent!important; width:100% !important; padding: 0 !important">
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Ban Depan</div>
																		<div class="country"><?php echo $kendaraan->ban_depan ?></div>
																																				
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Ban Belakang</div>
																		<div class="country"><?php echo $kendaraan->ban_belakang ?></div>
																																			
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Velg</div>
																		<div class="country"><?php echo $kendaraan->velg ?></div>
																															
																	</div>
																																		
																</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-lg-12">
												<div class="media service__single">
													<span class="service__singleIcon"><i class="ti-package"></i></span>
													<div class="media-body">
														<h3>LAIN - LAIN</h3>
														<div class="progress-table" style="background: transparent!important; width:100% !important; padding: 0 !important">
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Seat Belt</div>
																		<div class="serial"><?php echo $kendaraan->seat_belt ?></div>
																		<div class="serial"></div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Accu</div>
																		<div class="serial"><?php echo $kendaraan->accu ?></div>
																		<div class="serial">(V-AH)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Alternator</div>
																		<div class="serial"><?php echo $kendaraan->alternator ?></div>
																		<div class="serial">(V-A)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Kapasitas Tangki</div>
																		<div class="serial"><?php echo $kendaraan->kapasitas_tangki ?></div>
																		<div class="serial">(liter)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Max. Gradeability</div>
																		<div class="serial"><?php echo $kendaraan->max_gradeability ?></div>
																		<div class="serial">(%)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Max. Speed</div>
																		<div class="serial"><?php echo $kendaraan->max_speed ?></div>
																		<div class="serial">(Km/h)</div>
																		
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Clutch Diameter</div>
																		<div class="serial"><?php echo $kendaraan->clutch_diameter ?></div>
																		<div class="serial">(mm)</div>
																		
																	</div>
																	
																</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-lg-12">
												<div class="media service__single">
													<span class="service__singleIcon"><i class="ti-home"></i></span>
													<div class="media-body">
														<h3>BERAT</h3>
														<div class="progress-table" style="background: transparent!important; width:100% !important; padding: 0 !important">
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Curb Weight (berat kosong)</div>
																		<div class="country"><?php echo $kendaraan->curb_weight ?> (kg)</div>
																																				
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Gross Vehicle Weight</div>
																		<div class="country"><?php echo $kendaraan->gross_vehicle_weight ?> (kg)</div>
																																			
																	</div>
																	
																																		
																</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-lg-12">
												<div class="media service__single">
													<span class="service__singleIcon"><i class="ti-brush-alt"></i></span>
													<div class="media-body">
														<h3>TRANSMISI</h3>
														<div class="progress-table" style="background: transparent!important; width:100% !important; padding: 0 !important">
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Model</div>
																		<div class="country"><?php echo $kendaraan->model_transmisi ?></div>
																																				
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Gigi 1</div>
																		<div class="country"><?php echo $kendaraan->gigi_1 ?></div>
																																			
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Gigi 2</div>
																		<div class="country"><?php echo $kendaraan->gigi_2 ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Gigi 3</div>
																		<div class="country"><?php echo $kendaraan->gigi_3 ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Gigi 4</div>
																		<div class="country"><?php echo $kendaraan->gigi_4 ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Gigi 5</div>
																		<div class="country"><?php echo $kendaraan->gigi_5 ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Gigi 6</div>
																		<div class="country"><?php echo $kendaraan->gigi_6 ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Gigi 7</div>
																		<div class="country"><?php echo $kendaraan->gigi_7 ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Gigi 8</div>
																		<div class="country"><?php echo $kendaraan->gigi_8 ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Gigi 9</div>
																		<div class="country"><?php echo $kendaraan->gigi_9 ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Rev</div>
																		<div class="country"><?php echo $kendaraan->rev ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Final Gear Ratio</div>
																		<div class="country"><?php echo $kendaraan->final_gear_ratio ?></div>
																															
																	</div>
																																		
																</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-lg-12">
												<div class="media service__single">
													<span class="service__singleIcon"><i class="ti-brush-alt"></i></span>
													<div class="media-body">
														<h3>FITUR STANDARD</h3>
														<div class="progress-table" style="background: transparent!important; width:100% !important; padding: 0 !important">
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Air Conditioning</div>
																		<div class="country"><?php echo $kendaraan->air_conditioning ?></div>
																																				
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">DVD, CD, MP3, USB, Aux in, Radio</div>
																		<div class="country"><?php echo $kendaraan->dvd ?></div>
																																			
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Power Steering</div>
																		<div class="country"><?php echo $kendaraan->power_steering ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Tilt & Telescopic Steering</div>
																		<div class="country"><?php echo $kendaraan->tilt_telescopic ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Reverse Parking Camera</div>
																		<div class="country"><?php echo $kendaraan->reverse_parking ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Retractable Seat Belt</div>
																		<div class="country"><?php echo $kendaraan->retractable_seat_belt ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Tilt Cabin</div>
																		<div class="country"><?php echo $kendaraan->tilt_cabin ?></div>
																															
																	</div>
																																																			
																</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-lg-12">
												<div class="media service__single">
													<span class="service__singleIcon"><i class="ti-brush-alt"></i></span>
													<div class="media-body">
														<h3>REM</h3>
														<div class="progress-table" style="background: transparent!important; width:100% !important; padding: 0 !important">
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Service Brake</div>
																		<div class="country"><?php echo $kendaraan->service_brake ?></div>
																																				
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Parking Brake</div>
																		<div class="country"><?php echo $kendaraan->parking_brake ?></div>
																																			
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Exhaust Brake</div>
																		<div class="country"><?php echo $kendaraan->exhaust_brake ?></div>
																															
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Control Rem</div>
																		<div class="country"><?php echo $kendaraan->control_rem ?></div>
																															
																	</div>
																																																			
																</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-lg-12">
												<div class="media service__single">
													<span class="service__singleIcon"><i class="ti-brush-alt"></i></span>
													<div class="media-body">
														<h3>SUSPENSI</h3>
														<div class="progress-table" style="background: transparent!important; width:100% !important; padding: 0 !important">
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Depan</div>
																		<div class="country"><?php echo $kendaraan->suspensi_depan ?></div>
																																				
																	</div>
																	<div class="table-row" style="border: 0 !important">
																		<div class="percentage">Belakang</div>
																		<div class="country"><?php echo $kendaraan->suspensi_belakang ?></div>
																																			
																	</div>
																	
																																		
																</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<?php  }?>
								
							</div>
							</div>
					
					
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