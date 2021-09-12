
<?php
get_header();

$image= get_field("banner");
$heading = get_field('banner');
$title_one= get_field('banner');

?>

<section class="banner has--overlay" style="background-image:linear-gradient(black, black), url('<?php echo$image['image'];?>")>
<div class="container h-100">
	<div class="row h-100 align-items-end">
		<div class="col-12">
			<div class="banner__content text-center">
				<h1 class="title fs text-uppercase"><?php echo $heading['heading'];?></h1>
				<ul class="list-unstyled list-inline text-uppercase">
					<li><?php echo $title_one['title'];?></li>	
				</ul>

				 
			</div>
		</div>
	</div>
</div>


</section><!-- /banner -->

		<div id="primary" class="content-area">

			<section class="films" id="scroll-films">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="entry-title text-center">
								<h2 class="title text-uppercase">Films</h2>
							</div>
						</div>
					</div>

					<?php

					if( have_rows('films') ):
						?>
					<div class="row last-none">


							<?php
											
								while( have_rows('films') ) : the_row();

							$featured_posts = get_sub_field('film_post');
							$image_gallery = get_sub_field('image_gallery');
						

							if( $featured_posts ): ?>
							
						<?php foreach( $featured_posts as $featured_post ): 
							$title = get_the_title( $featured_post->ID );
							$image = get_the_post_thumbnail( $featured_post->ID );
							//$content = get_the_content( $featured_post->ID );
							?>
						<div class="col-12">
							<a href="film-details.html" class="films__card has--overlay">
								<figure class="films__card-media">
									<img src="<?php echo $image;?>" class="img-fluid" alt="">
								</figure>
								<div class="films__card-text text-center">
									<h2 class="title text-uppercase"><?php echo $title;?></h2>

									<div class="films__festival-logos">
										<?php foreach($image_gallery as $logo_img):?>
										<figure class="media">
											<img src="<?php echo $logo_img;?>" class="img-fluid" alt="">
										</figure>
										<?php endforeach;?>
																		
									</div>
								</div>
							</a>
						</div><!-- /films__card -->

											
							<?php endforeach;?>
							
							<?php endif; 

							endwhile;

						else :
							echo "no filed found";					
						?>
					</div>
				<?php endif;?>
				</div>
			</section><!-- /films -->
			

			<section class="designs" id="scroll-designs">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="entry-title text-center">
								<h2 class="title text-uppercase"><?php bloginfo('title');?></h2>
							</div>
						</div>
					</div>

					<div class="row popup-gallery last-none">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<a href="<?php echo get_template_directory_uri();?>../images/designs-1.jpg" class="popup-gallery-item">
								<figure class="media">
									<img src="<?php echo get_template_directory_uri();?>../images/designs-1.jpg" alt="" class="img-fluid">
								</figure>
							</a>
						</div><!-- /gallery-popup-item -->

						<div class="col-lg-4 col-md-6 col-sm-6">
							<a href="<?php echo get_template_directory_uri();?>../images/designs-2.jpg" class="popup-gallery-item">
								<figure class="media">
									<img src="<?php echo get_template_directory_uri();?>../images/designs-2.jpg" alt="" class="img-fluid">
								</figure>
							</a>
						</div><!-- /gallery-popup-item -->

						<div class="col-lg-4 col-md-6 col-sm-6">
							<a href="<?php echo get_template_directory_uri();?>../images/designs-3.jpg" class="popup-gallery-item">
								<figure class="media">
									<img src="<?php echo get_template_directory_uri();?>../images/designs-3.jpg" alt="" class="img-fluid">
								</figure>
							</a>
						</div><!-- /gallery-popup-item -->

						<div class="col-lg-4 col-md-6 col-sm-6">
							<a href="<?php echo get_template_directory_uri();?>../images/designs-4.jpg" class="popup-gallery-item">
								<figure class="media">
									<img src="<?php echo get_template_directory_uri();?>../images/designs-4.jpg" alt="" class="img-fluid">
								</figure>
							</a>
						</div><!-- /gallery-popup-item -->

						<div class="col-lg-4 col-md-6 col-sm-6">
							<a href="<?php echo get_template_directory_uri();?>../images/designs-5.jpg" class="popup-gallery-item">
								<figure class="media">
									<img src="<?php echo get_template_directory_uri();?>../images/designs-5.jpg" alt="" class="img-fluid">
								</figure>
							</a>
						</div><!-- /gallery-popup-item -->

						<div class="col-lg-4 col-md-6 col-sm-6">
							<a href="<?php echo get_template_directory_uri();?>../images/designs-6.jpg" class="popup-gallery-item">
								<figure class="media">
									<img src="<?php echo get_template_directory_uri();?>../images/designs-6.jpg" alt="" class="img-fluid">
								</figure>
							</a>
						</div><!-- /gallery-popup-item -->
					</div>
				</div>
			</section><!-- /designs -->

			<section class="hm-about-us" id="scroll-contact">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="hm-about-us__content text-center">
								<?php 
								$about=get_field('about_us');
								$name= get_field('name');
								var_dump($name);
								?>							
								<h2 class="title text-uppercase"><?php echo $about['title'];?></h2>

								<div class="des">
									<p><?php echo $about['content'];?></p>
									<p><?php echo $about['second_content'];?></p>
								</div>

								<div class="social-conetct">
									<div class="label-title"><?php echo $about['contact_title'];?></div>

									<ul class="social-media list-inline">
										<li><a href="#" class="icon-twitter" target="_blank"></a></li>
										<li><a href="#" class="icon-vimeo" target="_blank"></a></li>
										<li><a href="#" class="icon-instagram" target="_blank"></a></li>
										<li><a href="#" class="icon-youtube" target="_blank"></a></li>
										<li><a href="#" class="icon-behance" target="_blank"></a></li>
									</ul>
								</div>

								<div class="btn-box">
									<a href="#" class="btn"><?php echo $about['button_title'];?> <i class="icon-email"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div><!-- /content-area -->

		<section class="footer-top" id="scroll-tris">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<figure class="media justify-content-center">
							<img src="<?php echo get_template_directory_uri();?>../images/about.png" class="img-fluid" alt="">
						</figure>
					</div>
				</div>
			</div>
		</section><!-- /footer-top -->

<?php

get_footer();
?>

