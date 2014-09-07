<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  </head>
  <body>
    <div id="header" class="container">
      <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
      <?php wp_nav_menu(); ?>
    </div>
<!-- /header -->

<?php wp_head(); ?>
