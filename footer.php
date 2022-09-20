<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package caris-sell-homes
 */

?>
<!-- Footer Start -->
<footer id="colophon" class="site-footer">
	<div class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<div class="site-branding">
						<?php
						the_custom_logo();
						?>
					</div>
				</div>
				<div class="col-lg-10">
					<div class="footer-contact-info">
						<ul>
							<li>
								<a href=""><span class="icon"><img width="15" height="11" src="<?php echo home_url(); ?>/wp-content/themes/caris-sell-homes/assets/images/mail-icon.svg" alt=""></span>admin@caris-sellhomes.com</a>
							</li>
							<li>
								<a href=""><span class="icon"><img width="14" height="14" src="<?php echo home_url(); ?>/wp-content/themes/caris-sell-homes/assets/images/phone-icon.svg" alt=""></span>509-783-5667</a>
							</li>
							<li>
								<a href=""><span class="icon"><img width="13" height="16" src="<?php echo home_url(); ?>/wp-content/themes/caris-sell-homes/assets/images/pin-icon.svg" alt=""></span>712 S Ely St., Hwy 395 Kennewick, WA 99336</a>
							</li>
							<li>
								<div class="social-info-wp">
									<ul>
										<li>
											<a href=""><span class="icon"><img width="10" height="20" src="<?php echo home_url(); ?>/wp-content/themes/caris-sell-homes/assets/images/facebook-icon.svg" alt=""></span></a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom-box">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<div class="footer-bottom-text">
						<div class="left-content">
							<div class="copy-right">
								<p>© <?php echo date('Y'); ?> Caris-Sell Homes</p>
							</div>
							<div class="footer-bottom-link">
								<ul>
									<li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
									<li><a href="<?php echo home_url(); ?>/terms-of-use" title="Terms of Service">Terms of Service</a></li>
									<li><a href="<?php echo home_url(); ?>/cookie-policy" title="Cookies Policy">Cookies Policy</a></li>
								</ul>
							</div>
						</div>
						<div class="right-content">
							<div class="footer-other-link">
								<p>Web Design &amp; Digital Marketing with <span><i class="fa fa-heart" aria-hidden="true"></i></span> by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Footer End -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>