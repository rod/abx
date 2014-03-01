<?php
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
