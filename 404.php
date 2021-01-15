<?php get_header()?>

<div class="container mb-4">

    <div class="rounded pt-5 pb-5">
        <h2 class="text-center color-purple font-weight-bold pl-5 pr-5 pt-5 pb-5">Désolé la page que vous recherchez n'est plus disponible.</h2>
        <div class="row">
            <div class="col-lg-5">
                <h4 class="pl-3 color-purple">Effectuer une nouvelle recherche :</h4>
            </div>
            <div class="col-lg-5">
                <?php include(TEMPLATEPATH . '/searchform.php'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer()?>
