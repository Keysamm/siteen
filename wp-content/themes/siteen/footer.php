<footer id="CONTACT">
		<div class="container">
			<div class="flex_container flex_footer">
				<div class="footer-left">
					<div class="logo-wrap">
						<a href="#HEADER" class="logo-link">
							<div class="logo-link footer-logo" >
								<?php the_custom_logo(); ?>
							</div>
						</a>
					</div>
					<div class="copy">
						<p class="copyright"><?php the_field('siteen_footer'); ?></p>
						<p class="slogan"><?php the_field('slogan_footer'); ?></p>
					</div>
					<div class="social-links">
						<p>
							<a href="<?php the_field('social_facebook_footer'); ?>" target="_blank">
								<img src="<?php echo bloginfo(template_url); ?>/assets/img/icon_1.svg">
							</a>
							<a href="<?php the_field(' social_instagram_footer'); ?>" target="_blank">
								<img src="<?php echo bloginfo(template_url); ?>/assets/img/icon_2.svg" target>
							</a>
							<a href="<?php the_field('social_linkedin_footer'); ?>" target="_blank">
								<img src="<?php echo bloginfo(template_url); ?>/assets/img/icon_3.svg">
							</a>
							<a href="<?php the_field('social_telegram_footer'); ?>" target="_blank">
								<img src="<?php echo bloginfo(template_url); ?>/assets/img/icon_4.svg">
							</a>
						</p>
					</div>
				</div>
				<div class="footer_right">
					<h2>
						<?php the_field('contact_text_footer'); ?>
					</h2>
					<p class="email">
						<a href="http://gmail.com" target="_blank">
							<?php the_field('contact_email_footer'); ?>
						</a>
					</p>
					<p class="tel">
						<a href="tel:+380962360598">
							<?php the_field('contact_tell_footer'); ?>
						</a>
						<a href="tel:+380997439179">
							<?php the_field('contact_tell2_footer'); ?>
						</a>
					</p>
					<h2 class="location">
						<?php the_field('location_text_footer'); ?>
					</h2>
					<p>
						<?php the_field('location_footer'); ?>
					</p>
				</div>
			</div>

		</div>
	</footer>
	
	<?php wp_footer(); ?>

	<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></a>
	<script>
  		AOS.init({
			  once: true
		  });
	</script> -->
</body>

</html>