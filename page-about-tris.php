<?php
 get_header();
 $about= get_field('about_tris');
 ?>

		<section class="page-banner has--overlay" style="background-image:url('<?php echo $about['image'];?>');">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="page-banner__content text-center">
							<h1 class="title text-uppercase"><?php echo $about['title_one'];?></h1>
						</div>
					</div>
				</div>
			</div>
		</section><!-- /banner -->

		<div id="primary" class="content-area">
			<section class="single-page">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<main class="main-content">
								<article class="articles">
									<div class="entry-title text-center">
										<h2 class="title h1 text-uppercase"><?php echo $about['title_two'];?></h2>
									</div>

									<div class="entry-content">
										<?php echo $about['editor'];?>
									</div>
								</article><!-- /articles -->
							</main>
						</div>
					</div>
				</div>
			</section><!-- /single-page -->
		</div><!-- /content-area -->

<?php get_footer();?>