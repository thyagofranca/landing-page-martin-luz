<article <?php post_class( array( 'class' => 'main' )); ?>>
    <div class="card mb-4">
        <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'card-img-top img-fluid rounded')); ?>
        
        <div class="card-body">
            <h2 class="card-title">
                <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <?php the_excerpt(); ?>
        </div><!-- /card-body -->
    </div><!-- /card -->
</article>