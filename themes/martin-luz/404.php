<?php get_header(); ?>

<section id="erro-404">
    <div class="top">
        <figure>
            <img class="img-fluid img-custom" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Imagem customizada">
        </figure>

        <header class="text-center">
            <h1 class="main-title"><?php the_title(); ?></h1>
        </header>
    </div>

    <div class="container">
        <div class="row">  
            <div class="erro-content col-lg-8 col-md-8 col-12">
                <header>
                    <img class="img-fluid mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-erro-404.png" alt="erro 404">
                    <h3><?php _e( 'Desculpe, página não encontrada.', 'martin' ); ?></h3>
                    <p><?php _e( 'Infelizmente, a página que você deseja acessar não existe, ou o caminho está errado!', 'martin' ); ?></p>
                    <hr>
                    <h5 class="mt-5"><?php _e( 'Tente realizar uma nova busca para encontrar o conteúdo desejado.', 'martin' ); ?></h5>
                </header>

                <div class="row mt-4 mb-5">
                    <div class="col-lg-12 col-md-12 col-12">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div><!-- /col-md-8 -->
            <div class="erro-content col-lg-4 col-md-4 col-12">
                <?php get_sidebar(); ?>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</section>

<?php get_footer(); ?>