<!-- banner start -->
<?php
global $phone,$phone_link;
?>
<section class="main-banner back-img" style="background-image: url('<?php the_field('home_banner_image'); ?>');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content white-text text-center">
                        <?php
                        $home_banner_title = get_field('home_banner_title');
                        if(isset($home_banner_title) && (!empty($home_banner_title))):
                        ?>
                            <h1 class="h1-title"><?php echo $home_banner_title; ?></h1>
                        <?php
                        endif;
                        ?>
                        <div class="banner-btn">
                            <a href="tel:<?php echo $phone_link; ?>" title="Call now <?php echo $phone; ?>" class="sec-btn">Call now</a>
                            <a href="<?php the_permalink(16); ?>" title="Contact us" class="sec-btn btn-transparent">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<!-- about-us start -->
<section class="main-about-us">
    <div class="sec-wp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-img-wp">
                        <div class="back-img" style="background-image: url('<?php the_field('home_about_us_image'); ?>');"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-content white-text">
                        <?php
                        $home_about_us_title = get_field('home_about_us_title');
                        $home_about_us_sub_title = get_field('home_about_us_sub_title');
                        $home_about_us_content = get_field('home_about_us_content');
                        if(isset($home_about_us_title) && (!empty($home_about_us_title))):
                        ?>
                            <span class="small-text"><?php echo $home_about_us_title; ?></span>
                        <?php
                        endif;
                        ?>
                        <?php
                        if(isset($home_about_us_sub_title ) && (!empty($home_about_us_sub_title ))):
                        ?>
                            <h2 class="h2-title"><?php echo $home_about_us_sub_title; ?></h2>
                        <?php
                        endif;
                        ?>
                        <?php
                        if(isset($home_about_us_content) && (!empty($home_about_us_content))):
                        ?>
                            <div class="about-us-text overflow-text" data-simplebar="init">
                                <?php echo $home_about_us_content; ?>
                            </div>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about-us end -->

<!-- main-featured-home css start -->

<section class="main-featured-home">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="featured-home-content">
                        <span class="small-text"><?php the_field('home_floor_plans_title'); ?></span>
                        <h2 class="h2-title"><?php the_field('home_floor_plans_sub_title'); ?></h2>
                        <div class="featured-home-text">
                           <?php the_field('home_floor_plans_content'); ?>
                        </div>
                        <div class="featured-home-btn">
                            <a href="tel:<?php echo $phone_link; ?>" title="Call now <?php echo $phone; ?>" class="sec-btn">Call now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="floor-plan-slider-wp">
                        <div class="swiper-container">
                            <div class="swiper floor-plans-slider">
                                <div class="swiper-wrapper">
                                    <?php
                                    $args = array(  
                                        'post_type' => 'properties',
                                        'post_status' => 'publish',
                                        'numberposts' => -1,  
                                        'order' => 'ASC', 
                                    );
                                    $loop = new WP_Query( $args ); 
                                    while ( $loop->have_posts() ) : $loop->the_post(); 
                                    ?>
                                        <div class="swiper-slide">
                                            <div class="floor-plan-card" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                                                <div class="floor-plan-slider-content white-text">
                                                    <h3 class="h3-title"><?php the_title(); ?></h3>
                                                    <span class="sub-title"><?php the_field('properties_details',$loop->ID()); ?></span>
                                                    <div class="floor-plan-text overflow-text" data-simplebar="init">
                                                        <?php the_field('properties_details_content',$loop->ID()); ?>
                                                    </div>
                                                </div>
                                                <div class="read-more-wp">
                                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>, Read More">
                                                        <span class="text"> READ MORE</span>
                                                        <div class="icon-wp">
                                                            <span class="icon plus-icon">
                                                                <img src="<?php echo home_url(); ?>/wp-content/themes/caris-sell-homes/assets/images/add-square.svg" width="22" height="22" alt="arrow-icon">
                                                            </span>
                                                            <span class="icon right-icon">
                                                                <img src="<?php echo home_url(); ?>/wp-content/themes/caris-sell-homes/assets/images/read-more-square.svg" width="22" height="22" alt="read-more-icon">
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                    wp_reset_postdata(); 
                                    ?>
                                </div>
                                <div class="swiper-dots for-des">
                                    <div class="swiper-button-prev">
                                        <span class="icon-box">

                                        </span>
                                    </div>
                                    <div class="swiper-button-next">
                                        <span class="icon-box">

                                        </span>
                                    </div>
                                </div>
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- main-featured-home css end -->

<?php
get_template_part('template-parts/content', 'common');
?>