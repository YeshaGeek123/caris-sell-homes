<!-- review-slider start -->
<?php global $phone, $phone_link; ?>
<section class="main-review">
    <div class="sec-wp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="review-img-wp">
                        <div class="back-img" style="background-image: url('<?php the_field('home_reviews_image', 10); ?>);"></div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="review-content white-text">
                        <h2 class="h2-title"><?php the_field('home_reviews_main_title', 10); ?></h2>
                        <?php
                        $review_list = get_posts(array(
                            'post_type' => 'reviews',
                            'post_status' => 'publish',
                            'order'          => 'ASC',
                            'posts_per_page' => -1
                        ));
                        ?>
                        <div class="swiper-container white-text">
                            <div class="swiper review-slider">
                                <div class="swiper-wrapper">
                                    <?php
                                    if ($review_list) :
                                        foreach ($review_list as $review) :
                                    ?>
                                            <div class="swiper-slide">
                                                <div class="review-slider-content">
                                                    <div class="review-text overflow-text" data-simplebar="init">
                                                        <p><?php echo $review->post_content; ?></p>
                                                    </div>
                                                    <div class="review-by">
                                                        <p>- <?php echo $review->post_title; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>

                                </div>
                                <div class="swiper-dots">
                                    <div class="swiper-button-prev">
                                        <span class="icon-box">

                                        </span>
                                    </div>
                                    <div class="swiper-button-next">
                                        <span class="icon-box">

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- review-slider end -->

<!-- Gallery start -->
<section class="main-gallery">
    <div class="sec-wp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="gallery-content">
                        <h2 class="h2-title"><?php the_field('home_gallery_title',10); ?></h2>
                        <div class="gallery-btn">
                            <a href="tel:<?php echo $phone_link; ?>" title="Call now <?php echo $phone; ?>" class="sec-btn">Call now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-slider-wp">
                        <div class="swiper gallery-slider">
                            <div class="swiper-wrapper">
                                <?php
                                $gallery_image = get_field('home_gallery_images', 10);
                                if (isset($gallery_image) && !empty($gallery_image)) :
                                    $count = 1;
                                    foreach ($gallery_image as $key => $image) :
                                ?>
                                        <div class="swiper-slide">
                                            <div class="gallery-img-wp">
                                                <a href="<?php echo $image['url']; ?>" data-fancybox="gallery" title="Gallery Image <?php echo $count++; ?>">
                                                    <div class="back-img" style="background-image: url('<?php echo $image['url']; ?>');"></div>
                                                </a>
                                            </div>
                                        </div>
                                <?php
                                    endforeach;
                                endif;
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery End -->

<!-- our-partner start -->

<section class="main-our-partner">
    <div class="bg-img back-img" style="background-image: url('<?php the_field('home_our_partners_background_image', 10); ?>');"></div>
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-partner-wp">
                        <div class="our-partner-title white-text text-center">
                            <h2 class="h2-title"><?php the_field('home_our_partners_title', 10); ?></h2>
                            <p><?php the_field('home_our_partners_sub_title',10); ?></p>
                        </div>
                        <div class="row">
                            <?php
                            $our_partner_members = get_field('home_our_partners_members', 10);
                            if(isset($our_partner_members) && !empty($our_partner_members )):
                                if (have_rows('home_our_partners_members', 10)) :
                                    while (have_rows('home_our_partners_members', 10)) : the_row();
                                    $home_our_partners_members_image = get_sub_field('home_our_partners_members_image', 10);
                                        if(isset($home_our_partners_members_image) && !empty($home_our_partners_members_image)):
                            ?>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="our-partner-img-wp">
                                                    <div class="back-img" style="background-image: url('<?php echo $home_our_partners_members_image;  ?>');"></div>
                                                </div>
                                            </div>
                                <?php
                                        endif;
                                    endwhile;
                                endif;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our-partner end -->