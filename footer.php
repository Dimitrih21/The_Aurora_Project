  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6189ab" fill-opacity="1" d="M0,128L120,138.7C240,149,480,171,720,176C960,181,1200,171,1320,165.3L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
<footer>
    <div class="container-fluid pt-5 text-center">
        <div class="row">
            <div class="col-lg-4 col-sm-12 ">
                <?php dynamic_sidebar('footer-1') ?>
            </div>
            <div class="col-lg-4 col-sm-12">
                <?php dynamic_sidebar('footer-2') ?>
            </div>
            <div class="col-lg-4 col-sm-12">
                <?php dynamic_sidebar('footer-3') ?>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-5">
            <p class="text-center">Tous Droits Réservés, &copy; <?php echo date('Y') ?> - <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name')  ?></a></p>
            <a href="#" class="to-the-top"><i class="far fa-arrow-alt-circle-up fa-2x" title="Retour vers le haut"></i></a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
