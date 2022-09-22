<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package caris-sell-homes
 */

get_header();
?>

<!-- Banner Start -->
<section class="main-banner inner-banner">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="banner-content">
					<h1 class="h1-title">Oops! That page can&rsquo;t be found</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->

<!-- 404 Page Section Start -->
<div class="inner-page-text error-404 not-found text-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img width="1200" height="937" src="<?php echo home_url(); ?>/wp-content/themes/caris-sell-homes/assets/images/404.png" alt="404 Not Found!">
			</div>
		</div>
	</div>
</div>
<!-- 404 Page Section End -->

<?php
get_footer();
