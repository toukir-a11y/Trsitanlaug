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
							<ul class="footer__widget-nav text-uppercase">
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Contact Me</a></li>
								<li><a href="#">About Tris</a></li>
							</ul>
						</div>
					</div><!-- /footer__widget -->
				</div>
		</footer><!-- /footer -->
		<?php wp_footer();?>
	</body>
</html>
