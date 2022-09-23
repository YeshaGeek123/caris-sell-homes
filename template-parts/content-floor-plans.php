<!-- banner start -->
<section class="main-banner inner-banner main-floor-plan">
    <div class="sec-wp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="floor-plan-service-content white-text">
                        <span class="small-text"><?php the_title(); ?></span>
                        <h1 class="h1-title"><?php the_field('floor_plans_details_sub_title'); ?></h1>
                        <div class="floor-plan-service-text">
                            <?php the_field('floor_plans_details_content'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="floor-plan-service-img-wp">
                        <div class="back-img" style="background-image: url('<?php the_field('floor_plans_details_image'); ?>');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<!-- floor-plan-list start -->

<section class="floor-plan-list">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="floor-plan-list-content">
                        <div class="sec-title">
                            <h2 class="h2-title"><?php the_title(); ?></h2>
                        </div>

                        <div class="floor-plan-list-heading">
                            <span class="name-wp">Unit name</span>
                            <span class="size-wp">Size</span>
                        </div>
                        
                        <div class="floor-plan-list-wp">
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
                                <div class="floor-plan-list-card">
                                    <div class="img-wp">
                                        <div class="back-img" style="background-image: url('<?php the_post_thumbnail_url();  ?>');"></div>
                                    </div>
                                    <div class="title-wp">
                                        <h5 class="h5-title"><?php the_title(); ?></h5>
                                    </div>
                                    <div class="description-wp">
                                        <p><?php the_field('properties_details',$loop->ID()); ?></p>
                                    </div>
                                    <div class="btn-wp">
                                        <a  href="<?php the_permalink(); ?>" class="sec-btn btn-transparent" title="<?php the_title(); ?>, More info">More info</a>
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
</section>

<!-- floor-plan-list end -->

<?php
			get_template_part( 'template-parts/content', 'common' );		
		?>