<!-- banner start -->
<?php
global $phone, $phone_link;
?>
<section class="main-banner inner-banner main-plan-properties">
    <div class="sec-wp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="floor-plan-properties-content white-text">
                        <span class="small-text"><?php echo get_the_title(14); ?></span>
                        <h1 class="h1-title"><?php the_title(); ?></h1>
                        <div class="floor-plan-properties-text">
                            <?php the_field('properties_details_content'); ?>
                        </div>
                    </div>
                    <div class="floor-plan-btn-wp">
                        <a class="sec-btn" href="javascript:void(0)" title="The Floor Plan">Download the Floor Plan <span class="icon-box"></span></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="plan-properties-slider-wp">
                        <!-- Swiper Gallery-->
                        <div class="swiper swiper-gallery">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="plan-properties-img-wp">
                                        <div class="back-img" style="background-image: url('<?php the_post_thumbnail_url();  ?>')"></div>
                                    </div>
                                </div>
                                <?php
                                $args = array(
                                    'post_type' => 'properties',
                                    'post_status' => 'publish',
                                    'numberposts' => -1,
                                    'order' => 'ASC',
                                );
                                $loop_post = new WP_Query($args);
                                while ($loop_post->have_posts()) : $loop_post->the_post();
                                ?>
                                    <div class="swiper-slide">
                                        <div class="plan-properties-img-wp">
                                            <div class="back-img" style="background-image: url('<?php the_post_thumbnail_url();  ?>')">
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
                            <div class="swiper-scrollbar for-des"></div>
                        </div>
                        <div class="swiper swiper-thumbnails">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="plan-thumbnail-img-wp">
                                        <div class="back-img" style="background-image: url('<?php the_post_thumbnail_url();  ?>')">
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $post_thumbnail = new WP_Query($args);
                                while ($post_thumbnail->have_posts()) : $post_thumbnail->the_post();
                                ?>
                                    <div class="swiper-slide">
                                        <div class="plan-thumbnail-img-wp">
                                            <div class="back-img" style="background-image: url('<?php the_post_thumbnail_url();  ?>')">
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->


<section class="plan-feature">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php
                $properties_list_features = get_field('properties_list_features');
                if (isset($properties_list_features) && !empty($properties_list_features)) :
                ?>
                    <div class="col-lg-6">

                        <div class="plan-list plan-feature-list">
                            <h3 class="h3-title"><?php the_field('properties_feature_main_title'); ?></h3>
                            <ul>
                                <?php
                                if (have_rows('properties_list_features')) :
                                    while (have_rows('properties_list_features')) : the_row();
                                ?>
                                        <li><?php the_sub_field('properties_list_features_name'); ?></li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php
                endif;
                ?>
                <?php
                $actual_size = get_field('actual_size');
                if (isset($actual_size) && !empty($actual_size)) :
                ?>
                    <div class="col-lg-6">
                        <div class="plan-list plan-feature-list">
                            <h3 class="h3-title"><?php the_field('properties_actual_size_main_title'); ?></h3>
                            <ul>
                                <?php
                                if (have_rows('properties_actual_size')) :
                                    while (have_rows('properties_actual_size')) : the_row();
                                ?>
                                        <li><?php the_sub_field('properties_list_actual_size'); ?></li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php
                endif;
                ?>
                <?php
                $model_details_list = get_field('model_details_list');
                if (isset($model_details_list) && !empty($model_details_list)) :
                ?>
                    <div class="col-lg-6">
                        <div class="plan-list model-detail-list">
                            <h3 class="h3-title"><?php the_field('properties_model_main_title'); ?></h3>
                            <ul>
                                <?php
                                if (have_rows('model_details_list')) :
                                    while (have_rows('model_details_list')) : the_row();
                                ?>
                                        <li><span class="icon"><img src="<?php the_sub_field('model_details_list_icon'); ?>" width="22" height="17" alt="Details List"></span>
                                            <?php the_sub_field('model_details_list_title'); ?>: <span class="light-text"><?php the_sub_field('model_details_list_content'); ?></span></li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php
                endif;
                ?>
                <div class="col-lg-12">
                    <div class="plan-feature-btn">
                        <a class="sec-btn" title="Call now <?php echo $phone; ?>" href="tel:<?php echo $phone_link; ?>">Call now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/content', 'common');
?>