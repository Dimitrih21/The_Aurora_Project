<?php get_header()?>

<section class="container">
    <div class="row">
        <h2 class="color-purple border-bottom-title-articles">Votre recherche</h2>
    </div>

    <div class="row">
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-lg-12 col-sm-12">
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><a href="<?php the_permalink(); ?>" class="color-purple">Voir le contenu</a>  </p>
                        <p class="card-text"><small class="text-muted">Publié le <?php the_time('j F Y'); ?></small></p>
                    </div>
                    <?php the_post_thumbnail("liste_articles", ['class' => 'card-img-bottom']); ?></a>
                </div>
            </div>
        <?php endwhile; else : ?>
    </div>
    <p class="font-weight-bold color-purple">Désolé mais il n'y a aucun article sur cette page</p>
    <?php endif; ?>
</section>

<?php get_footer()?>
