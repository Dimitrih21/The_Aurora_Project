<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <title><?php bloginfo('name'); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
   <!-- FONTAWESOME -->
   <script src="https://kit.fontawesome.com/5bf2af5d34.js" crossorigin="anonymous"></script>
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?> >
<script>

  function openNav() {
    document.getElementById("mySidepanel").style.width = "400px";
  }

  function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
  }
</script>


  <?php wp_body_open(); ?>

    <header class="header">

    <div class="container-fluid">
      <div class="mt-2 d-flex justify-content-between">
        <!-- FORM SIDEPANNEL -->
        <div id="mySidepanel" class="sidepanel">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <?php include(TEMPLATEPATH . '/searchform.php'); ?>
        </div>
          <i id="search-icon" class="fas fa-search fa-3x color-icons openbtn rounded" onclick="openNav()"></i>
        <div>
        <!-- END FORM SIDEPANNEL -->
                    <?php if (function_exists('the_custom_logo')) {
                      the_custom_logo();
                    } ?>
                  </div>
                  <div id="menu">
                    <label for="slide-menu-right" class="fas fa-bars fa-2x color-icons"></label>
                    <div class="slide-menu">
                      <input id="slide-menu-right" class="menu-toggle" type="checkbox" />
                      <div class="menu-display">
                        <label for="slide-menu-right" class="close-icon">Close</label>
                        <h1 class="menu-title text-white">Menu</h1>
                        <div class="menu-list">
                          <ul>
                            <?php wp_nav_menu( array( 'theme_location' => 'main', 'class' => 'text-secondary' ) ); ?>
                          </ul>
                        </div>
                      </div>
                      <label for="slide-menu-right" class="menu-overlay"></label>

                    </div>
                  </div>
                  </div>
                </div>
              </header>
