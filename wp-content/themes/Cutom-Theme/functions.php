<?php
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}


    //Add Theme Support
    add_theme_support( 'admin-bar-menu');
    add_theme_support( 'title-tags');
    add_theme_support( 'post-tumbnails');
    add_theme_support(
        'html5',
        array(
          'comment-form',
          'comment-list',
          'gallery',
          'caption',
        )
      );
      add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support( 'post-formats' , ['aside', 'gallery', 'link', 'video', 'quote', 'status', 'audio', 'chat']);
    add_theme_support( 'automatic-feed-links');
    add_theme_support( 'custom-background');
    add_theme_support( 'custom-header', array(
        'default-image' => get_stylesheet_directory_uri() . '/images/banner.jpg', // set default header image
        'width'         => 1500, // set the width for header image
        'height'        => 500, // set the height for header image
        'flex-height'   => true, // enable flex height
        'flex-width'    => true, // enable flex width
        'video'         => true, // enable video header feature

    ) );
    add_theme_support( 'custom-logo');
    add_theme_support( 'customize-selective-refresh-wigdets');
    add_theme_support( 'stater-contents');
    add_theme_support( 'menus' );

//custom banner section starts here
    add_action( 'customize_register', 'cd_customizer_settings' );
    function cd_customizer_settings( $wp_customize ) {
      $wp_customize->add_section( 'banner' , array(
          'title'      => 'Banner'
      ) );
      $wp_customize->add_setting( 'display' , array(
          'default'     => 'No'
      ) );
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'display_control', array(
        'label'        => 'Want to show the section or not',
        'section'    => 'banner',
        'settings'   => 'display',
        'type'      => 'select',
        'choices'    => array('No'=> 'No', 'Yes' => 'Yes')
      ) ) );
      $wp_customize->add_setting( 'add_image_1' , array(
          'default'     => null
      ) );
      $wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'add_image_control_1', array(
        'label'        => 'Image',
        'section'    => 'banner',
        'settings'   => 'add_image_1',


      ) ) );
    /*  $wp_customize->add_setting( 'heading_1' , array(
          'default'     => 'this is Heading for first image'
      ) );
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'heading_control_1', array(
        'label'        => 'Heading_1',
        'section'    => 'banner',
        'settings'   => 'heading_1',
      ) ) );
      $wp_customize->add_setting( 'text_1' , array(
          'default'     => 'this is text for first image'
      ) );
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text_control_1', array(
        'label'        => 'Text_1',
        'section'    => 'banner',
        'settings'   => 'text_1',
      ) ) );*/
      $wp_customize->add_setting( 'add_image' , array(
          'default'     => null
      ) );
      $wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'add_image_control', array(
        'label'        => 'Image',
        'section'    => 'banner',
        'settings'   => 'add_image',


      ) ) );
  /*    $wp_customize->add_setting( 'heading_2' , array(
          'default'     => 'this is Heading for second image'
      ) );
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'heading_control_2', array(
        'label'        => 'Heading_2',
        'section'    => 'banner',
        'settings'   => 'heading_2',
      ) ) );
      $wp_customize->add_setting( 'text_2' , array(
          'default'     => 'this is text for second image'
      ) );
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text_control_2', array(
        'label'        => 'Text_2',
        'section'    => 'banner',
        'settings'   => 'text_2',
      ) ) );*/

    }
//custom banner section ends here
//Homepage slider section starts Here
add_action( 'customize_register', 'cd_customizer_settings_slider' );
function cd_customizer_settings_slider( $wp_customize ) {
  $wp_customize->add_section( 'slider' , array(
      'title'      => 'Homepage Slider'
  ) );
  $wp_customize->add_setting( 'display_slider' , array(
      'default'     => 'No'
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'display_slider_control', array(
    'label'        => 'Want to show the section or not',
    'section'    => 'slider',
    'settings'   => 'display_slider',
    'type'      => 'select',
    'choices'    => array('No'=> 'No', 'Yes' => 'Yes')
  ) ) );
  $wp_customize->add_setting( 'slider_size' , array(
      'default'     => 'Full Width'
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'slider_size_control', array(
    'label'        => 'Use Diffrent Size Slider',
    'section'    => 'slider',
    'settings'   => 'slider_size',
    'type'      => 'select',
    'choices'    => array('Full Width'=> 'Full Width', 'Small Width' => 'Small Width')
  ) ) );
  $wp_customize->add_setting( 'slider_image_1' , array(
      'default'     => null
  ) );
  $wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'slider_image_control_1', array(
    'label'        => 'Slide-1',
    'section'    => 'slider',
    'settings'   => 'slider_image_1',

  ) ) );
  $wp_customize->add_setting( 'slider_image_2' , array(
      'default'     => null
  ) );
  $wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'slider_image_control_2', array(
    'label'        => 'Slide-2',
    'section'    => 'slider',
    'settings'   => 'slider_image_2',

  ) ) );
  $wp_customize->add_setting( 'slider_image_3' , array(
      'default'     => null
  ) );
  $wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'slider_image_control_3', array(
    'label'        => 'Slide-3',
    'section'    => 'slider',
    'settings'   => 'slider_image_3',

  ) ) );



}
//homepage slider section Ends here
//homepage parralax Section starts here
add_action( 'customize_register', 'cd_customizer_settings_parralax' );
function cd_customizer_settings_parralax( $wp_customize ) {
  $wp_customize->add_section( 'parralax' , array(
      'title'      => 'Parralax'
  ) );
  // $wp_customize->add_setting( 'display_parralax' , array(
  //     'default'     => 'No'
  // ) );
  // $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'display_parralax_control', array(
  //   'label'        => 'Want to show the section or not',
  //   'section'    => 'parralax',
  //   'settings'   => 'display_parralax',
  //   'type'      => 'select',
  //   'choices'    => array('No'=> 'No', 'Yes' => 'Yes')
  // ) ) );
  $wp_customize->add_setting( 'add_parralax_image_1' , array(
      'default'     => null
  ) );
  $wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'add_parralax_image_control_1', array(
    'label'        => 'Parralax Image',
    'section'    => 'parralax',
    'settings'   => 'add_parralax_image_1',
  ) ) );
  $wp_customize->add_setting( 'add_parralax_video' , array(
      'default'     => null
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'add_parralax_video_control_1', array(
    'label'        => 'Parralax Video',
    'section'    => 'parralax',
    'settings'   => 'add_parralax_video',
  ) ) );
}
//homepage parralax Section ends here
//video section starts here
add_action( 'customize_register', 'andys_theme_customizer' );
function andys_theme_customizer( $wp_customize ) {
			// Andys Video Section
	$wp_customize->add_section("Videosection", array(
			"title" => __("Video Section", "customizer_ads_sections")
	));
$wp_customize->add_setting( 'video_upload',
 array(
		'default' 					=> '',
		'transport' 				=> 'refresh',
		'sanitize_callback' => 'absint',
	  'type' 							=> 'theme_mod',
 )
);
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'video_upload',
 array(
		'label' => __( 'Default Media Control' ),
		'description' => esc_html__( 'This is the description for the Media Control' ),
		'section' => 'Videosection',
		'mime_type' => 'video',  // Required. Can be image, audio, video, application, text
		'button_labels' => array( // Optional
			 'select' 		=> __( 'Select File' ),
			 'change' 		=> __( 'Change File' ),
     	 'default' 		=> __( 'Default' ),
			 'remove' 		=> __( 'Remove' ),
			 'placeholder' => __( 'No file selected' ),
			 'frame_title' => __( 'Select File' ),
			 'frame_button' => __( 'Choose File' ),
		)
 )
) );
$wp_customize->add_setting( 'overlay_text' , array(
		 'default'     => 'this is Heading for first image'
 ) );
 $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'overlay_text_control', array(
	 'label'        => 'Overlay Text',
	 'section'    => 'Videosection',
	 'settings'   => 'overlay_text',
 ) ) );
}
//video section ends here
// Load in Our CSS Starts here
      add_action('wp_enqueue_scripts', 'my_stylesheet');
      function my_stylesheet(){
        wp_enqueue_style('main-css', get_stylesheet_directory_uri().'/style.css', [] , time(), 'all');
        wp_enqueue_script('main-script', get_stylesheet_directory_uri().'/script.js', [] , time(), 'all');
        wp_enqueue_style('bootstrap-1','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
        wp_enqueue_script('bootstrap-2','https://code.jquery.com/jquery-3.3.1.slim.min.js');
        wp_enqueue_script('bootstrap-3','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
        wp_enqueue_script('bootstrap-4','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
  }
// Load in our CSS end here
//Register menu starts here
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
  add_action( 'init', 'wpb_custom_new_menu' );
  function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'left-menu' => __( 'Left Menu', 'wpthemedev1' ),
        'right-menu' => __( 'Right Menu', 'wpthemedev1' ),
      )
    );
  }
//Register menu Ends Here
?>
