<?php get_header(); ?>
    <section id="home">
        <?php 
        if(have_posts()) : while(have_posts()) : the_post();
            the_content();
            endwhile; endif; ?>

        <section id="posts">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title mb-5">Últimos Posts</h3>
                    </div>
                    <?php 
                        $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'category__in' => [1],
                        'order' => 'ASC',
                        'orderby' => 'date'
                    );
                    $postList = new WP_Query( $args ); ?>
                    
                    <?php if( $postList->have_posts() ) : 
                    while( $postList->have_posts() ) : $postList->the_post(); ?>
                        <div class="col-md-4 col-12">
                            <div class="wrap">
                                <?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-fluid img-posts' )); ?>
                                <div class="box-title">
                                    <h3>
                                        <a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /posts -->
    </section>
<?php get_footer(); ?>