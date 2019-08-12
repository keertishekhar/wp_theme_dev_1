<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php    wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <!--header banner Start-->
  <!--Header view split-->
      <?php if(get_theme_mod('display') == "Yes"){ ?>
      <div class="splitview skewed">
          <div class="panel bottom">
              <div class="content">
                  <div class="description">
                  <!-- <h1>  <?php //echo get_theme_mod('heading_1');?></h1>
                  <p> <?php// echo get_theme_mod('text_1');?> </p> -->
                      <!-- <h1>The original image.</h1>
                      <p>This is how the image looks like before applying a duotone effect.</p> -->
                  </div>
                    <img src="<?php echo get_theme_mod('add_image_1');?>" width="100%" height="100%"  alt="Deotone">
                  <!-- <img src="https://gpca.org.ae/wp-content/uploads/2018/04/Banner-image-2-1-7065x2355.jpg" width="100%" height="100%" alt="Original"> -->
              </div>
          </div>

          <div class="panel top">
              <div class="content">
                  <div class="description">
                    <!-- <h1>  <?php //echo get_theme_mod('heading_2');?></h1>
                    <p> <?php //echo get_theme_mod('text_2');?> </p> -->
                      <!-- <h1>The duotone image.</h1>
                      <p>This is how the image looks like after applying a duotone effect.</p> -->
                  </div>
                      <img src="<?php echo get_theme_mod('add_image');?>" width="100%" height="100%"  alt="Deotone">
                  <!-- <img src="http://demo.bestdnnskins.com/portals/6/innerpage/banner3_04.jpg" width="100%" height="100%"  alt="Deotone"> -->
              </div>
          </div>

          <div class="handle"></div>
      </div>
    <?php } ?>
  <!--Header view split-->
  <!--header banner End-->
<!--navbar Starts here-->
<div class="col-md-12 menu-define">
  <div class="row ">
      <!-- left-navbar Start-->
      <div class="col-md-5 full-width">
        <div class="row ">
          <nav class="mb-1 navbar offset-md-3 navbar-expand-lg navbar-dark orange lighten-1">
                      <?php
                        $args = array(
                                'theme_location' => 'left-menu',
                                'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => 'navbarSupportedContent-555',
                                'menu-id'         => 'left-menu',
                                'menu_class'      => 'navbar-nav mr-auto',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                                  // 'item_wrap' => '<ul aria-labelledby="navbarDropdown">%3$s</ul>',
                                );
                        wp_nav_menu( $args);
                      ?>
          </nav>
        </div>
      </div>
      <!--left-navbar End-->
      <div class="col-md-2 menu-logo">
        <div class="row">
          <?php the_custom_logo(); ?>
        </div>
      </div>
      <!--right-navbar Start-->
      <div class="col-md-5 full-width">
        <div class="row">
          <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
                      <?php
                        $argts = array(
                                'theme_location' => 'right-menu',
                                'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => 'navbarSupportedContent-55',
                                'menu-id'         => 'right-menu',
                                'menu_class'      => 'navbar-nav mr-auto',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                                  // 'item_wrap' => '<ul aria-labelledby="navbarDropdown">%3$s</ul>',
                                );
                        wp_nav_menu($argts);
                      ?>
          </nav>
        </div>
      </div>
      <!--right-navbar Ends-->
  </div>
</div>
<!--navbar Ends here-->
