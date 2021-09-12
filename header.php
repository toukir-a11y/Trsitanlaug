
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<?php 
		wp_head();
		$header= get_field('header','option');
		?>

	</head>
	<body <?php body_class();?>>
		<div id="sidr">
			<div class="mobile-header d-none">
				<div class="navbar-header">
				 	<button type="button" class="navbar-toggle in">
		                <i class="icon-cancel"></i>
		            </button>
				</div>

				<div class="navigation">

				<?php
				wp_nav_menu(array(
					'theme_location'     => 'primary_menu',
					'depth'              => 1,
					'container'          => false,
					'menu_class'         => 'nav navbar-nav',
					'menu_id'            => '',
					'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
					'walker'             => new wp_bootstrap_navwalker()
				));
				?>
				
				</div>
			</div>
		</div><!-- /mobile-header -->

		<header class="header transparent">
			<nav class="navbar navbar-expand">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.html">
							<img src="<?php echo $header['logo'];?>" class="transparent-logo" alt="logo">
						</a>
					</div>

					<div class="collapse navbar-collapse justify-content-end">

					<?php
				wp_nav_menu(array(
					'theme_location'     => 'primary_menu',
					'depth'              => 1,
					'container'          => false,
					'menu_class'         => 'nav navbar-nav',
					'menu_id'            => '',
					'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
					'walker'             => new wp_bootstrap_navwalker(),
				));
				?>
						<ul class="navbar-nav navbar--nav-right">
							<li class="mobile-navbar-toggler d-none">
								<a href="#sidr"class="navbar-toggle">
									<span class="icon-bar"></span>
								  	<span class="icon-bar"></span>
								  	<span class="icon-bar"></span>
							  	</a>
							</li>
						</ul>
					</div>
				</div>
			</nav> <!-- /nav -->
		</header> <!-- /header -->