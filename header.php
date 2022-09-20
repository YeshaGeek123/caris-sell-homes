<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package caris-sell-homes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" title="Skip to content" href="#primary"><?php esc_html_e('Skip to content', 'caris-sell-homes'); ?></a>

		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="site-branding">
							<?php
							the_custom_logo();
							?>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="header-menu">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
									<span></span>
									<span></span>
									<span></span>
								</button>
								<div class="header-mobile-menu">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
								</div>
							</nav>
							<div class="header-btn">
								<?php
								$phone = get_field('phone_number','option');
								$val = array("(", ")", " ", "-", ".");
								$replace = array("", "", "", "", "");
								//Phone link
								$phone_link = str_replace($val, $replace, $phone);
								?>
								<a href="tel:<?php echo $phone_link; ?>" class="sec-btn btn-transparent" title="Call now <?php echo $phone; ?>">Call now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>