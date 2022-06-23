<?php 
    $argCarousel = array(
        'post_type' => 'carouselHome',
        'posts_per_page' => 10,
        'order' => 'ASC',
        'orderby' => 'date'
    );
    $carousel = new WP_Query( $argCarousel ); ?>

    <div class="carousel">
        <?php if( $carousel->have_posts() ) : while( $carousel->have_posts() ) : $carousel->the_post(); ?>
    		<div class="item">
    		    <?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-fluid img-slide' ));
    		    	the_content(); ?>
    		</div>
        <?php endwhile; ?>
    </div><!-- /carousel -->
    
<?php wp_reset_postdata(); endif; ?>

    