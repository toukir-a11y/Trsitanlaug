<?php $footer= get_field('footer','option');?>

<footer class="footer text-center">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="footer__entry-title text-uppercase">
							<span><?php echo $footer['title'];?></span>
							<span><?php echo $footer['title_two'];?></span>
						</div>
						<div class="footer__widget">
					
							<?php
								wp_nav_menu(array(
									'theme_location'  =>'footer_menu',
									'menu_id'         =>'footer_menu',
									'menu_class'      => 'footer__widget-nav text-uppercase',

								));
							?>
						</div>
					</div><!-- /footer__widget -->
				</div>
		</footer><!-- /footer -->
		<?php wp_footer();?>
	</body>
</html>

