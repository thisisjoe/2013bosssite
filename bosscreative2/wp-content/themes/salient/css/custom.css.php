<?php header("Content-type: text/css; charset=utf-8"); 

// Access WordPress 
$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];

require_once( $path_to_wp . '/wp-load.php' );

$options = get_option('salient'); 

echo $options['custom-css'];

?>