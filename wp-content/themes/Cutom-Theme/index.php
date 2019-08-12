  <?php get_header() ;?>
  <!--parralax Start-->
  <div class="paral paralsec" style="background-image: url(<?php echo get_theme_mod('add_parralax_image_1');?>)">
  <?php if(have_posts()):while(have_posts()): the_post()?>
    <!-- <div class="card text-center offset-md-3" style="width: 680px;" >
        <div class="card-header">
          <img src="<?php the_post_thumbnail(); ?>" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo the_title();?></h5>
          <p class="card-text"><?php echo the_content();?></p>
        </div>
    </div> -->

  <?php endwhile;?>
<?php endif;?>
<!--Image crousal-->
<?php if(get_theme_mod('display_slider') == "Yes"){
      if(get_theme_mod('slider_size') == "Small Width"){
  ?>
    <div id="carouselExampleIndicators" class="carousel custom_class_slide slide mt-5 ml-5 mr-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo get_theme_mod('slider_image_1'); ?>" alt="First slide" height="300px" width="300px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_theme_mod('slider_image_2'); ?>" alt="Second slide" height="300px" width="300px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_theme_mod('slider_image_3'); ?>" alt="Third slide" height="300px" width="300px">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  <?php }
  else{?>
    <div id="carouselExampleIndicators" class="carousel custom_class_slide slide mt-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo get_theme_mod('slider_image_1'); ?>" alt="First slide" height="300px" width="300px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_theme_mod('slider_image_2'); ?>" alt="Second slide" height="300px" width="300px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_theme_mod('slider_image_3'); ?>" alt="Third slide" height="300px" width="300px">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <?php
  }
}
  ?>
<!--End image Crousal-->
</div>
<!--end of parallax-->
<!--video section starts here-->
<div class="video-container">
      <?php
      $id = get_theme_mod('video_upload');
      $attr = array(
          'src' => wp_get_attachment_url($id),
          'autoplay' => 'on',
          'loop' => 'on',
      );
  echo wp_video_shortcode( $attr );
      ?>
</div>
<h1 class="centered">THis is my first class web home page</h1>
<!--video section Ends here-->
<?php get_footer(); ?>
