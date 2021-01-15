<?php get_header() ?>

    <div class="img-position-article">
        <div class="container-fluid d-flex justify-content-center">
            <?php the_post_thumbnail('original', ['class' =>'img-fluid', 'alt' => '']); ?>
        </div>
        <div class="div-width-article mx-auto pt-4 pb-4 pr-4 pl-4 mb-5 border rounded bg-white border-shadow">
            <h2 class="text-uppercase color-icons text-center"><?php the_title(); ?></h2>
            <p class="mb-5"><?php the_content(); ?></p>
        </div>
    </div>
<?php get_footer() ?>

