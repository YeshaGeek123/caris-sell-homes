<!-- banner start -->
<?php global $phone,$phone_link; ?>
<section class="main-banner inner-banner main-contact-us">
    <div class="sec-wp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-us-content white-text">
                        <h1 class="h1-title">Contact Us</h1>
                        <div class="sub-text">
                           <?php the_field('contact_content'); ?>
                        </div>
                        <div class="contact-sec-info">
                            <div class="footer-contact-info">
                                <ul>
                                    <li>
                                        <a href="mailto:<?php the_field('email','options'); ?>" title="<?php the_field('email','options'); ?>"><span class="icon"><img width="15" height="11" src="<?php echo home_url(); ?>/wp-content/themes/caris-sell-homes/assets/images/mail-icon.svg" alt=""></span><?php the_field('email','options'); ?></a>
                                    </li>
                                    <li>
                                        <a href="tel:<?php echo $phone; ?>" title="Call us <?php echo $phone; ?>"><span class="icon"><img width="14" height="14" src="<?php echo home_url(); ?>/wp-content/themes/caris-sell-homes/assets/images/phone-icon.svg" alt="Call us"></span><span class="callus"><?php echo $phone; ?></span></a>
                                    </li>
                                    <li>
                                        <a href="<?php the_field('address_link','options'); ?>" title="<?php the_field('address','options'); ?>" target="_blank"><span class="icon"><img width="13" height="16" src="<?php echo home_url(); ?>/wp-content/themes/caris-sell-homes/assets/images/pin-icon.svg" alt="Address"></span><?php the_field('address','options'); ?></a>
                                    </li>
                                    <li>
                                        <div class="social-info-wp">
                                            <ul>
                                                <li>
                                                    <a href="<?php the_field('facebook_link','options'); ?>" title="Facebook" target="_blank"><span class="icon"><img width="10" height="20" src="<?php echo home_url(); ?>/wp-content/themes/caris-sell-homes/assets/images/facebook-icon.svg" alt="Facebook"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="conatct-us-wp">
                        <?php
                        echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->