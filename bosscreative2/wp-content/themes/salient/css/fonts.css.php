<?php header("Content-type: text/css; charset=utf-8"); 

// Access WordPress 
$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];

require_once( $path_to_wp . '/wp-load.php' );

$options = get_option('salient'); 

$body = $options['body_font'];
$navigation = $options['navigation_font'];
$navigation_dropdown = $options['navigation_dropdown_font'];
$home_slider_caption = $options['home_slider_caption_font'];
$standard_header = $options['standard_h_font'];
$sidebar_carousel_footer_header = $options['sidebar_footer_h_font'];
$team_member_names = $options['team_member_h_font'];


/*-------------------------------------------------------------------------*/
/*	Body Font
/*-------------------------------------------------------------------------*/
$styles = explode('-', $options['body_font_style']);

( intval( substr($options['body_font_size'],0,-2) ) > 8 ) ? $line_height =  intval(substr($options['body_font_size'],0,-2)) +10 .'px' : $line_height = null ;  ?>

body, .toggle h3 a, .bar_graph li span strong, #search-results .result .title span
{	
	<?php if($options['body_font'] != '-') echo 'font-family:' . $options['body_font'] .';'; ?>
	<?php if($options['body_font_size'] != '-') echo 'font-size:' . $options['body_font_size'] .';'; ?>
	
	<?php if(!empty($line_height)) echo 'line-height:' . $line_height .';'; ?>
	<?php if(!empty($styles[0])) echo 'font-weight:' .  $styles[0] .';'; ?>
	<?php if(!empty($styles[1])) echo 'font-style:' . $styles[1]; ?>
}



<?php 
/*-------------------------------------------------------------------------*/
/*	Navigation Font
/*-------------------------------------------------------------------------*/
$styles = explode('-', $options['navigation_font_style']);

( intval( substr($options['navigation_font_size'],0,-2) ) > 8 ) ? $line_height =  intval(substr($options['navigation_font_size'],0,-2)) - 1 .'px' : $line_height = null ;  ?>

header#top nav > ul > li > a
{	
	<?php if($options['navigation_font'] != '-') echo 'font-family:' . $options['navigation_font'].';'; ?>
	<?php if($options['navigation_font_size'] != '-') echo 'font-size:' . $options['navigation_font_size'] .';'; ?>

	<?php if(!empty($line_height)) echo 'line-height:' . $line_height .';'; ?>
	<?php if(!empty($styles[0])) echo 'font-weight:' .  $styles[0] .';'; ?>
	<?php if(!empty($styles[1])) echo 'font-style:' . $styles[1]; ?>
}




<?php 
/*-------------------------------------------------------------------------*/
/*	Navigation Dropdown Font
/*-------------------------------------------------------------------------*/
$styles = explode('-', $options['navigation_dropdown_font_style']);
( intval( substr($options['navigation_dropdown_font_size'],0,-2) ) > 8 ) ? $line_height =  intval(substr($options['navigation_dropdown_font_size'],0,-2)) + 10 .'px' : $line_height = null ;  ?>

header#top .sf-menu li ul li a
{	
	<?php if($options['navigation_dropdown_font'] != '-') echo 'font-family:' . $options['navigation_dropdown_font'].';'; ?>
	<?php if($options['navigation_dropdown_font_size'] != '-') echo 'font-size:' . $options['navigation_dropdown_font_size'] .';'; ?>
		
	<?php if(!empty($line_height)) echo 'line-height:' . $line_height .';'; ?>
	<?php if(!empty($styles[0])) echo 'font-weight:' .  $styles[0] .';'; ?>
	<?php if(!empty($styles[1])) echo 'font-style:' . $styles[1]; ?>
}


@media only screen 
and (min-width : 1px) and (max-width : 1000px) 
{
  header#top .sf-menu a {
  	font-family: <?php echo $options['navigation_dropdown_font']; ?>!important;
  	font-size: 14px!important;
  }
}



<?php 
/*-------------------------------------------------------------------------*/
/*	Home Slider Caption Font
/*-------------------------------------------------------------------------*/
$styles = explode('-', $options['home_slider_caption_font_style']);
( intval( substr($options['home_slider_caption_font_size'],0,-2) ) > 8 ) ? $line_height =  intval(substr($options['home_slider_caption_font_size'],0,-2)) + 19 .'px!important' : $line_height = null ;  ?>

#featured article .post-title h2 span, blockquote
{	
	<?php if($options['home_slider_caption_font'] != '-') echo 'font-family:' . $options['home_slider_caption_font'].';'; ?>
	<?php if($options['home_slider_caption_font_size'] != '-') echo 'font-size:' . $options['home_slider_caption_font_size'] .';'; ?>

	<?php if(!empty($line_height)) echo 'line-height:' . $line_height .';'; ?>
	<?php if(!empty($styles[0])) echo 'font-weight:' .  $styles[0] .';'; ?>
	<?php if(!empty($styles[1])) echo 'font-style:' . $styles[1]; ?>
}




<?php 
/*-------------------------------------------------------------------------*/
/*	Standard Header Font
/*-------------------------------------------------------------------------*/
$styles = explode('-', $options['standard_h_font_style']);
?>

h1, h2, h3, h4, h5, h6, .row .col.section-title h1, .row .col.section-title h2, #call-to-action span, header#top #logo, #error-404 h1, #error-404 h2, #page-header-bg h1,
article.post .post-header h1, article.post .post-header h2, article.post.quote .post-content h2, article.post.link .post-content h2
{	
	<?php if($options['standard_h_font'] != '-') echo 'font-family:' . $options['standard_h_font'].';'; ?>
	<?php if(!empty($styles[0])) echo 'font-weight:' .  $styles[0] .';'; ?>
	<?php if(!empty($styles[1])) echo 'font-style:' . $styles[1]; ?>
}

body h1, article.post .post-header h1, .row .col.section-title h1 {
	font-size: <?php echo 30 + intval($options['standard_h_font_deviation']) . 'px'; ?>;
	line-height: <?php echo (30 + intval($options['standard_h_font_deviation'])) . 'px'; ?>;
}

#page-header-bg h1 {
	font-size: <?php echo 49 + intval($options['standard_h_font_deviation']) . 'px'; ?>;
	line-height: <?php echo (49 + intval($options['standard_h_font_deviation'])) . 'px'; ?>;
}

body h2, article.post .post-header h2, #call-to-action .container span {
    font-size: <?php echo 24 + intval($options['standard_h_font_deviation']) . 'px'; ?>;
	line-height: <?php echo (24 + intval($options['standard_h_font_deviation'])) . 'px'; ?>;
}

.row .col h2, #search-results .result h2 {
	font-size: <?php echo 24 + intval($options['standard_h_font_deviation']) . 'px'; ?>;
	line-height: <?php echo (24 + intval($options['standard_h_font_deviation'])) +3 . 'px'; ?>;
}

article.post.quote .post-content h2, article.post.link .post-content h2 {
	font-size: <?php echo 24 + intval($options['standard_h_font_deviation']) . 'px'; ?>;
 	line-height: <?php echo (24 + intval($options['standard_h_font_deviation'])) + 5 . 'px'; ?>;
}

body h3 {
    font-size: <?php echo 21 + intval($options['standard_h_font_deviation']) . 'px'; ?>;
	line-height: <?php echo (21 + intval($options['standard_h_font_deviation'])) . 'px'; ?>;
}
body h4 {
    font-size: <?php echo 18 + intval($options['standard_h_font_deviation']) . 'px'; ?>;
	line-height: <?php echo (18 + intval($options['standard_h_font_deviation'])) . 'px'; ?>;
}
body h5 {
    font-size: <?php echo 16 + intval($options['standard_h_font_deviation']) . 'px'; ?>;
	line-height: <?php echo (16 + intval($options['standard_h_font_deviation'])) . 'px'; ?>;
}
body h6 {
    font-size: <?php echo 15 + intval($options['standard_h_font_deviation']) . 'px'; ?>;
	line-height: <?php echo (15 + intval($options['standard_h_font_deviation'])) . 'px'; ?>;
}
   

header#top #logo 
{
	line-height: 22px!important;
}

article.post .post-meta .day 
{	
	<?php if($options['standard_h_font'] != '-') echo 'font-family:' . $options['standard_h_font'].';'; ?>
}




<?php 
/*-------------------------------------------------------------------------*/
/*	Sidear, Carousel & Nectar Button Header Font
/*-------------------------------------------------------------------------*/
$styles = explode('-', $options['sidebar_footer_h_font_style']);
$line_height =  substr($options['sidebar_footer_h_font_size'],0,-2); ?>

#footer-outer .widget h4, #sidebar h4, #call-to-action .container a, .uppercase, .nectar-button, body .widget_calendar table th, body #footer-outer #footer-widgets .col .widget_calendar table th
{	
	<?php if($options['sidebar_footer_h_font'] != '-') echo 'font-family:' . $options['sidebar_footer_h_font'].';'; ?>
	<?php if($options['sidebar_footer_h_font_size'] != '-') echo 'font-size:' . $options['sidebar_footer_h_font_size'] .';'; ?>
			
	<?php if(!empty($styles[0])) echo 'font-weight:' .  $styles[0] .';'; ?>
	<?php if(!empty($styles[1])) echo 'font-style:' . $styles[1]; ?>
}



<?php 
/*-------------------------------------------------------------------------*/
/*	Team member names & heading subtitles
/*-------------------------------------------------------------------------*/
$styles = explode('-', $options['team_member_h_font_style']);
$line_height =  substr($options['team_member_h_font_size'],0,-2); ?>

.team-member h3, .row .col.section-title p, .row .col.section-title span, #page-header-bg .subheader
{	
	<?php if($options['team_member_h_font'] != '-') echo 'font-family:' . $options['team_member_h_font'].';'; ?>
	<?php if($options['team_member_h_font_size'] != '-') echo 'font-size:' . $options['team_member_h_font_size'] .';'; ?>
		
	<?php if(!empty($styles[0])) echo 'font-weight:' .  $styles[0] .';'; ?>
	<?php if(!empty($styles[1])) echo 'font-style:' . $styles[1]; ?>
		
}


article.post .post-meta .month 
{
	line-height: <?php echo $line_height + -6 . 'px'; ?>!important;
}


