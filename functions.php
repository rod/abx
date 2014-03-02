<?php

  // Register our sidebars and widgetized areas.
  function arphabet_widgets_init() {
    register_sidebar( array(
      'name' => 'Home right sidebar',
      'id' => 'home_right_1',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="rounded">',
      'after_title' => '</h2>',
    ) );
  }
  add_action( 'widgets_init', 'arphabet_widgets_init' );


  // Custom logo at login
  function my_login_logo() { ?>
    <style type="text/css">
      body.login div#login h1 {
        background: #999;
        padding: 1em;
        height: 3em;
        width: 3em;
        margin: 0 auto 1em;
        border-radius: 50%;
      }
      body.login div#login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
        margin: 0;
      }
    </style>
  <?php }
  add_action( 'login_enqueue_scripts', 'my_login_logo' );
  function my_login_logo_url() {
    return get_bloginfo( 'http://abovethebarrex.com' );
  }
  add_filter( 'login_headerurl', 'my_login_logo_url' );
  function my_login_logo_url_title() {
      return 'Above the Barre X';
  }
  add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>
