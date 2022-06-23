<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if(have_posts()) : while(have_posts()) : the_post(); 
            the_content(); 
        endwhile; ?>

        <?php else : 
            echo "<p>Ops, aconteceu algo errado</p>";
        endif; ?>
    </main><!-- /main -->
</div><!-- /primary -->

<?php get_footer(); ?>
