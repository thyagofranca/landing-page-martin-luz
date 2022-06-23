<?php get_header(); ?>

<section id="primary">
    <main id="blog">
        <div class="container">
            <div class="row">
                <div class="content col-lg-8 col-md-8 col-12">
                    <?php 
                        if(have_posts()) : while(have_posts()) : the_post();
                            get_template_part('template-parts/content', get_post_format());
                        endwhile; ?>

                      <?php else : get_404_template(); endif; ?>
                </div><!-- /content -->

                <div class="content col-lg-4 col-md-4 col-12">
                    <?php get_sidebar(); ?>
                </div><!-- /col-lg-4 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </main><!-- /blog -->
</section><!-- /primary -->

<?php get_footer(); ?>