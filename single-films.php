
<!DOCTYPE html>
<html lang="en">
<?php 
get_header();
$banner= get_field('banner');
$empty= get_field('titles');
$credits= get_field('credits');
$partner= get_field('partner_logo');
$gallery=get_field('photo_gallery');
$award= get_field('award_link');
?>
		<section class="page-banner has--overlay" style="background-image:url('<?php echo $banner['background_image'];?>');">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="page-banner__content text-center">
							<h1 class="title text-uppercase"><?php echo $banner['banner_title'];?></h1>
						</div>
					</div>
				</div>
			</div>
		</section><!-- /banner -->

		<div id="primary" class="content-area">
			<section class="festival-logos">
				<div class="container">
					<div class="row last-none justify-content-center">
						<div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
							<a  class="festival-logos__item">
								<img src="<?php the_field('festival_logo');?>" class="img-fluid" alt="">
							</a>
						</div><!-- /festival-logos__item -->

						<?php
							
							if( have_rows('festival_logos') ):
								
								while( have_rows('festival_logos') ) : the_row();
																
									$image = get_sub_field('logos');
																										
							?>

						<div class="col-lg-2 col-md-3 col-sm-6  d-flex justify-content-center align-items-center">
					
							<a class="festival-logos__item">
												
								<img src="<?php echo $image;?>" class="img-fluid" alt="">
							</a>
							
						</div><!-- /festival-logos__item -->

						<?php
							endwhile;
														
							else :
								echo "no field found";
							endif;
							?>

						<!-- <div class="col-lg-2 col-md-3 col-sm-6  d-flex justify-content-center align-items-center">
							<a class="festival-logos__item">
								<img src="../images/festival-logos-3.png" class="img-fluid" alt="">
							</a>
						</div>/festival-logos__item -->

						<!-- <div class="col-lg-2 col-md-3 col-sm-6  d-flex justify-content-center align-items-center">
							<a class="festival-logos__item">
								<img src="../images/festival-logos-4.png" class="img-fluid" alt="">
							</a>
						</div>/festival-logos__item -->

						<!-- <div class="col-lg-2 col-md-3 col-sm-6  d-flex justify-content-center align-items-center">
							<a class="festival-logos__item">
								<img src="../images/festival-logos-5.png" class="img-fluid" alt="">
							</a>
						</div>/festival-logos__item -->
					</div>
				</div>
			</section><!-- /festival-logos -->

			<section class="films-empty" style="background-color: #866F37; color: #fff;">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="films-empty__content text-center">
								<h2 class="title h1 text-uppercase"><?php echo $empty['heading']; ?></h2>
								<h4 class="sub-title text-uppercase"><?php echo $empty['title'];?></h4>
								<div class="meta-wrap"><?php echo $empty['title_one'];?></div>
								<div class="desc">
									<p><?php echo $empty['description'];?></p>
								</div>
							</div>

							<div class="films-empty__embed">
								<iframe src='<?php echo $empty['video_link'];?>' frameborder='0' allow="autoplay; fullscreen; picture-in-picture" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</section><!-- /films-empty -->

			<section class="credits">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="entry-title text-center">
								<h2 class="title text-uppercase"><?php echo $credits['heading'];?></h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="credits__card">
								<a class="credits-popup-fit" href="<?php echo $credits['image']; ?>">
									<img src="<?php echo $credits['image'];?>" class="img-fluid" alt="">
								</a>

								<div class="credits__card-content">

									<?php echo $credits['editor'];?>
									<!-- <ul class="list-unstyled">
										<li>
											<strong>Year:</strong>
											<span>2019</span>
										</li>
										<li>
											<strong>Director:</strong> 
											<span>Tristan Laughton</span>
										</li>
										<li>
											<strong>Producer:</strong>
											<span>George Kalivas</span>
										</li>
										<li>
											<strong>Starring:</strong>
											<span>David Friend</span>
											<span>Gregory Bennett</span>  
										</li>
									</ul>

									<ul class="list-unstyled view-credits">
										<li>
											<strong>Executive Producer:</strong>
											<span>David Friend</span>
										</li>
										<li>
											<strong>Cast:</strong>
											<span>George Kalivas</span>  
											<span>David Friend</span>
											<span>George Kalivas</span>  
											<span>David Friend</span>
											<span>George Kalivas</span>  
											<span>David Friend</span>
										</li>
									</ul> -->
									<div class="btn-box">
										<a class="btn btn-view-credits">
											<span class="visible-text">View Credits</span> 
											<span class="hidden-text">Minimize</span> 
											<i class="icon-view-credits"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- /credits -->

			<section class="photo-gallery">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="entry-title text-center">
								<h2 class="title text-uppercase"><?php the_field('title');?></h2>
							</div>
						</div>
					</div>
					
					<div class="row popup-gallery last-none">
					<?php
							
							if( have_rows('photo_gallery') ):
								
								while( have_rows('photo_gallery') ) : the_row();
																
									$image = get_sub_field('image');
																	
							?>
						<div class="col-md-6 col-sm-6">
							<a href="<?php echo $image?>" class="popup-gallery-item">
								<figure class="media">
									<img src="<?php echo $image?>" alt="" class="img-fluid">
								</figure>
							</a>
						</div><!-- /gallery-popup-item -->

						<?php
							endwhile;
														
							else :
								echo "no field found";
							endif;
							?>

						<!-- <div class="col-md-6 col-sm-6">
							<a href="../images/gallery-2.jpg" class="popup-gallery-item">
								<figure class="media">
									<img src="../images/gallery-2.jpg" alt="" class="img-fluid">
								</figure>
							</a>
						</div>/gallery-popup-item -->

						<!-- <div class="col-md-6 col-sm-6">
							<a href="../images/gallery-3.jpg" class="popup-gallery-item">
								<figure class="media">
									<img src="../images/gallery-3.jpg" alt="" class="img-fluid">
								</figure>
							</a>
						</div>/gallery-popup-item -->

						<!-- <div class="col-md-6 col-sm-6">
							<a href="../images/gallery-4.jpg" class="popup-gallery-item">
								<figure class="media">
									<img src="../images/gallery-4.jpg" alt="" class="img-fluid">
								</figure>
							</a>
						</div>/gallery-popup-item -->
					</div>
				</div>
			</section><!-- /photo-gallery -->



			<section class="awards">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="awards__content text-center">
								<h2 class="title text-uppercase"><?php the_field('award_title');?></h2>

								<?php
							
							if( have_rows('award_link') ):
								
								while( have_rows('award_link') ) : the_row();
																
									$link = get_sub_field('link');
									$lname= get_sub_field('link_name');																	
							?>
								<div class="quick-links">								
									<a href="<?php echo $link;?>"><?php echo $lname;?></a>								
								</div>
								<?php
							endwhile;
														
							else :
								echo "no field found";
							endif;
							?>
							</div>
						</div>
					</div>
				</div>
			</section><!-- /awards -->

			<!-- <section class="press">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="press__content text-center">
								<h2 class="title text-uppercase">Selections And Awards</h2>

								<div class="quick-links">
									<a href="#">Durham Region International Film Festival 2020</a>
									<a>DuToronto Arthouse Film Festival 2020</a>
									<a>Regent Park Film Festival 2020</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>/press -->

			<section class="partners">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="entry-title text-center">
								<h2 class="title text-uppercase"><?php the_field('partners');?></h2>
							</div>
						</div>
					</div>					
					<div class="row justify-content-center last-none">
					<?php
						
						if( have_rows('partner_logo') ):
							
							while( have_rows('partner_logo') ) : the_row();
															
								$image = get_sub_field('logo');
																								
						?>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="partners__logo">							
								<img src="<?php echo $image;?>" class="img-fluid" alt="">
							</div>
						</div>

						<?php
							endwhile;
														
							else :
								echo "no field found";
							endif;
							?>
					</div>
				</div>
			</section><!-- /partners -->
		</div><!-- /content-area -->

	<?php get_footer();?>
	</body>
</html>