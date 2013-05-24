<?php 
  /*
  Plugin Name: Boss Creative SEO Footer
  Plugin URI: http://www.thisisboss.com
  Description: This plugin utilizes the wp_footer hook to inject the Boss SEO footer code into your site.
  Author: Chadsten Lowery
  Version: 1.0
  Author URI: http://www.thisisboss.com
  */
  
  function add_footer() {
    $ch = curl_init("http://bossfooter.thisisboss.com/bossfooter.php"); // Open the external file that has what we need
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, $_SERVER['SERVER_NAME']);
    print curl_exec($ch);
    curl_close($ch);
  }
add_action('wp_footer', 'add_footer', 10);
