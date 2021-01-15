<?php get_header()?>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6189ab" fill-opacity="1" d="M0,320L40,304C80,288,160,256,240,218.7C320,181,400,139,480,149.3C560,160,640,224,720,234.7C800,245,880,203,960,197.3C1040,192,1120,224,1200,224C1280,224,1360,192,1400,176L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
<div id="wave">
<div class="container py-5" id="video">
  <?php
  query_posts(array(
    'post_type' => 'Vidéos',
    'showposts' => 1
    ) ); ?>
    <?php while (have_posts()) : the_post(); ?>    <!-- VIDEO HEADER -->
  <div class="row" id="animation">
    <div class="col-md-4 relative">
      <h2 class="relative"><?php the_title(); ?></h2>
      <h2 id="video-mobile"><?php the_title(); ?></h2>
      <button class="btn relative">Nos conseils</button>
      <div id="left-border"></div>
    </div>
    <div class="col-12 col-md-8 d-flex justify-content-center align-items-center pt-5">
      <div id="circle" data-toggle="modal" data-target="#modal">
        <div id="play"><a href="#"></a></div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
            </div>
            <div class="modal-body text-center">
              <?php the_content(); ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile;?>
</div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6189ab" fill-opacity="1" d="M0,320L40,304C80,288,160,256,240,218.7C320,181,400,139,480,149.3C560,160,640,224,720,234.7C800,245,880,203,960,197.3C1040,192,1120,224,1200,224C1280,224,1360,192,1400,176L1440,160L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<div class="container" id="articles">
<?php
$articles = get_posts('showposts=3');

foreach ($articles as $post) {
  $i++;
  if ($i <= 3) {
  if ($i % 2 == 0) {
     ?>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="overlay"><?php the_post_thumbnail('large', ['class' => 'img-fluid', 'alt' => '', 'style' => 'height: auto;']); ?></div>
      </div>
      <div class="col-12 col-md-6">
        <div class="line"></div>
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>">Lire plus</a>
      </div>
    </div>
  <?php } else { ?>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="line"></div>
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>">Lire plus</a>
      </div>
      <div class="col-12 col-md-6">
        <div class="overlay"><?php the_post_thumbnail('large', ['class' => 'img-fluid', 'alt' => '', 'style' => 'height: auto; background-color: rgba(167, 163, 255, 0.49);']); ?></div>
      </div>
    </div>
  <?php }
  }
} ?>

</div>
<!--  END ARTICLES -->


<!--  INFOGRAPHIES -->

<?php
    query_posts(array(
    'post_type' => 'infographies',
    'showposts' => 3
    ) );
?>

<div class="container" id="infographies">
  <h2 class="size-color-title-info border-title-info">Les dernières infographies</h2>
  <div class="row mt-3 mb-5 pb-5">
    <?php while (have_posts()) : the_post(); ?>
    <div class="col-sm-12 col-lg-4">
      <div class="card mb-5" style="width: 18rem;">
                <a href="<?php the_permalink(); ?>" target="_blank">
        <?php the_post_thumbnail('medium', ['class' => 'card-img-top']);?>
        </a>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>

<!--  MISSIONS -->

<div class="container" id="missions">
  <div class="row">
    <h2>Missions</h2>
    <span>Nos missions pour une évolution de la conscience collective</span>
  </div>
  <div class="row">
  <?php
  query_posts(array(
    'post_type' => 'Missions',
    'showposts' => 3
    ) ); ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="col-lg-4 col-sm-12">
      <div><?php the_post_thumbnail('thumbnail'); ?></div>
      <h4><?php the_title(); ?></h4>
      <p><?php the_excerpt(); ?></p>
    </div>
    <?php endwhile;?>
  </div>
</div>
<?php get_footer()?>
