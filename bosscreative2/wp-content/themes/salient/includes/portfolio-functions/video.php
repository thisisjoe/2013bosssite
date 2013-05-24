<!doctype html>
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php 
// Access WordPress 
$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];

require_once( $path_to_wp . '/wp-load.php' );


$postid = stripslashes(htmlspecialchars_decode(filter_input(INPUT_GET, 'post-id', FILTER_SANITIZE_STRING)));

$video_height = get_post_meta($postid, '_nectar_video_height', true);
if(empty($video_height)) $video_height = 480;
 
wp_head(); ?>

</head>

<style>
	body {background-color: #000; height: <?php echo $video_height + 32; ?>px!Important;}
	#wpadminbar { display: none;}
	html { margin-top: 0px!important; }
	.jp-video-container { margin-bottom: 0px!important;}
	.jp-jplayer { height: <?php echo $video_height; ?>px!important; }
	
	@media only screen 
	and (min-width : 1px) and (max-width : 1050px) {
		body {background-color: transparent!important;}
		.jp-jplayer { height: auto!important; }
		
	}
</style>


<?php

nectar_video($postid); 

wp_footer();

?>

</body>
</html>