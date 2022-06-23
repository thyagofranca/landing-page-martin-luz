<?php get_header(); ?>

<div id="primary">
    <main id="main">
        <div class="top">
            <figure>
                <img class="img-fluid img-custom" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Imagem customizada">
            </figure>
            <header>
        	    <h1 class="main-title"><?php the_title(); ?></h1>
    	    </header>
        </div><!-- /top -->

        <div class="container">
            <div class="row">
                <div class="post-content col-md-8 col-12">
                    <?php 
                        while(have_posts()) : the_post();    
                            get_template_part('template-parts/content', 'single' ); 
                    ?>
                    <div class="row">
                        <div class="paginacao text-left col-6 my-5">
                            <?php next_post_link( '&laquo; %link' ); ?>
                        </div>
                        <div class="paginacao text-right col-6 my-5">
                            <?php previous_post_link( '%link &raquo;' ); ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div><!-- /content -->
                <div class="post-content mb-5 col-md-4 col-12">
                    <?php get_sidebar(); ?>
                </div><!-- /content -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /posts -->
</div><!-- /primary -->

<?php get_footer(); ?>