<?php get_header() ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class=" mt-5 pb-5 container">
    <h2 class="text-uppercase bg-bleu-foncé text-white text-center mt-5 pt-5 pb-5 border-radius-infographie"><?php the_title(); ?></h2>
    <section class="d-flex justify-content-center border border-light bg-light border-radius-infographie pt-5 pb-5">
      <p class="text-center"><?php the_content(); ?></p>
    </section>
  </div>
  <?php endwhile; endif ?>
<?php get_footer() ?>